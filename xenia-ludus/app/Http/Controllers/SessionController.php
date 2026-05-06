<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('/example-login'); //CHANGE to login
    }

    public function store() {
        $credentials = request()->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]); 
        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'name'=> 'Sorry, password or name is incorrect',
            ]);
        }
        request()->session()->regenerate();
        return redirect('/login'); //CHANGE to front page?
    }

    public function destroy() {
        Auth::logout();
        return redirect('/login'); //CHANGE to front page?
    }
}
