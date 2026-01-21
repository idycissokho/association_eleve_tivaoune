<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use App\Mail\WelcomeMember;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)],
            'role' => 'required|in:membre,secretaire,tresorier,president',
        ]);

        // Stocker le mot de passe en clair pour l'email
        $plainPassword = $request->password;

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => null,
            'promotion_year' => '1993',
            'current_profession' => null,
            'current_location' => null,
            'bio' => null,
            'is_admin' => $request->role === 'president',
            'is_active' => true,
        ]);

        // Envoyer l'email de bienvenue
        try {
            Mail::to($user->email)->send(new WelcomeMember($user, $plainPassword, $request->role));
        } catch (\Exception $e) {
            // Log l'erreur mais ne pas faire échouer la création du membre
            \Log::error('Erreur envoi email: ' . $e->getMessage());
        }

        return redirect()->route('dashboard')->with('success', 'Membre créé avec succès ! Un email de bienvenue a été envoyé. 🎉');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'current_profession' => 'nullable|string|max:255',
            'current_location' => 'nullable|string|max:255',
            'promotion_year' => 'nullable|string|max:10',
            'bio' => 'nullable|string|max:1000',
        ]);

        $user->update($request->only([
            'name', 'email', 'phone', 'current_profession', 
            'current_location', 'promotion_year', 'bio'
        ]));

        return redirect()->route('dashboard')->with('success', 'Profil mis à jour avec succès ! 🎉');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // Empêcher la suppression de son propre compte
        if ($user->id === auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Vous ne pouvez pas supprimer votre propre compte'
            ]);
        }
        
        $userName = $user->name;
        $user->delete();
        
        return response()->json([
            'success' => true,
            'message' => "Le membre {$userName} a été supprimé avec succès"
        ]);
    }
}