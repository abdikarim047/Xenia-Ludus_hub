<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
    public function create() {
        return view('/register');
    }
    public function store() {
        $validatedAttributes = request()->validate([
            'name'=> ['required', Rule::unique('users', 'naam')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required', 'confirmed'], //confirmed requires password_confirmed input
        ]); 
        $user = User::create([
            'naam' => $validatedAttributes['name'],
            'email' => $validatedAttributes['email'],
            'wachtwoord' => $validatedAttributes['password']
        ]);
        Auth::login($user);
        request()->session()->regenerate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
