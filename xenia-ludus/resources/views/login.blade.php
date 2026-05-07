@extends('layouts.app')

@section('content')
    <section class="login-content">
        <h1 class="">Login Pagina</h1>
        <form action="/login" method="POST" class="">
            @csrf
            <div>
                <label for="name" class="">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"  required>
            </div>
            <x-validation-error name="name"/>

            {{-- <div >
                <label for="email" class="">email</label>
                <input type="email" name="email" id="email" required>
            </div> --}}
            <div >
                <label for="password" class="">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <x-validation-error name="password"/>
            <button type="submit">
                login
            </button>
        </form>
        
        {{-- ONLY FOR DEVELOPMENT PURPOSES --}}
        @auth
        <strong style="color: red;">logged in as {{ Auth::user()->naam }}</strong>
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
        @endauth
        <a href="/register">REGISTER</a>
    </section>

@endsection