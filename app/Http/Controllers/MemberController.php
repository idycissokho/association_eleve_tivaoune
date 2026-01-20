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

        return redirect()->route('admin.dashboard')->with('success', 'Membre créé avec succès ! Un email de bienvenue a été envoyé. 🎉');
    }
}