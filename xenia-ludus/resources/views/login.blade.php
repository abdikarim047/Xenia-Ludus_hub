@extends('layouts.app')

@section('content')
    <section class="login-content">
        <h1 class="">Login Pagina</h1>
        <form class="">
            <div>
                <label class="">Name</label>
                <input type="text" name="name" required>
            </div>

            <div >
                <label class="">email</label>
                <input type="email" name="email" required>
            </div>
        

                <div >
                    <label class="">password</label>
                    <input type="password" name="passwoord" required>
                </div>
                <button>
                    login
                </button>
        </form>
    </section>

@endsection