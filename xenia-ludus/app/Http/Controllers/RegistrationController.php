<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function show() {
        return view('/example-register'); //CHANGE
    }
    public function store() {
        $validatedAttributes = request()->validate([
            'name'=> ['required'],
            'email'=> ['required', 'email'],
            'password'=> ['required', 'confirmed'], //confirmed requires password_confirmed input
        ]); 
        
        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/');
    }
}
