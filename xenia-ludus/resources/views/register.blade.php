@extends('layouts.app')

@section('content')
    <section class="login-content">
        <h1 class="">Sign Up</h1>
        <form action="/register" method="POST" class="">
            @csrf
            <div>
                <label for="name" class="">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <x-validation-error name="name"/>

            <div >
                <label for="email" class="">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <x-validation-error name="email"/>
            <div >
                <label for="password" class="">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <x-validation-error name="password"/>
            <div >
                <label for="password_confirmation" class="">Confirm password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required> {{-- using naming convention _confirmation for name, laravel can use 'confirmed' rule in validation --}}
            </div>
            <x-validation-error name="password_confirmation"/>
            <button type="submit">
                Sign Up
            </button>
        </form>
        
        {{-- ONLY FOR DEVELOPMENT PURPOSES --}}
        @auth
        <strong style="color: red;">logged in as {{ Auth::user()->name }}</strong>
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
        @endauth
    </section>

@endsection