<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)],
            'phone' => 'nullable|string|max:20',
            'promotion_year' => 'required|integer|min:1990|max:2030',
            'current_profession' => 'nullable|string|max:255',
            'current_location' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:1000',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'promotion_year' => $request->promotion_year,
            'current_profession' => $request->current_profession,
            'current_location' => $request->current_location,
            'bio' => $request->bio,
            'is_admin' => true,
            'is_active' => true,
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // Solution de contournement : sauvegarder l'ID utilisateur en session
            $request->session()->put('user_id', Auth::id());
            $request->session()->save();
            
            return redirect()->route('admin.dashboard')->with('success', 'Connexion réussie !');
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Déconnecter l'utilisateur
        Auth::logout();
        
        // Supprimer toutes les données de session
        $request->session()->invalidate();
        
        // Régénérer le token CSRF
        $request->session()->regenerateToken();
        
        // Supprimer explicitement l'ID utilisateur de la session
        $request->session()->forget('user_id');
        
        // Vider complètement la session
        $request->session()->flush();
        
        return redirect()->route('login')->with('success', 'Déconnexion réussie. À bientôt !');
    }
}