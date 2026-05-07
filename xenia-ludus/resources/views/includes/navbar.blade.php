<nav class="bg-gray-900 text-white px-6 py-4 shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <!-- Logo -->
        <h1 class="text-l font-bold text-orange-400">
            <a href="{{ route('landingpage') }}">Xenia Ludus hub</a>

        </h1>

        <!-- Links -->
        <div class="flex space-x-6 text-m">
            <a href="#" class="hover:text-orange-400 transition">QnA</a>
            <a href="#" class="hover:text-orange-400 transition">Game</a>
            <a href="#" class="hover:text-orange-400 transition">Company</a>
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-blue-400 transition">Logout</button>
                </form>
                <div class="text-red-400">
                    {{ Auth::user()->naam }}
                </div>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="hover:text-blue-400 transition">Login</a>
            @endguest
        </div>

    </div>
</nav>