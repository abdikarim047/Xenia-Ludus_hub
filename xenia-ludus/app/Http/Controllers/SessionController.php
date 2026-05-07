<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('/login');
    }

    public function store() {
        $credentials = request()->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]); 
        $loginCredentials = [
            'naam' => $credentials['name'],
            'password' => $credentials['password']
        ];
        if (! Auth::attempt($loginCredentials)) {
            throw ValidationException::withMessages([
                'name'=> 'Sorry, password or name is incorrect',
            ]);
        }
        request()->session()->regenerate();
        return redirect('/landingpage');
    }

    public function destroy() {
        Auth::logout();
        return redirect('/landingpage');
    }
}
