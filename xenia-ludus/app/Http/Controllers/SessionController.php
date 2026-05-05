<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show() {
        return view('/example-login'); //CHANGE
    }

    public function store() {
        //login
    }

    public function destroy() {
        //remove login
    }
}
