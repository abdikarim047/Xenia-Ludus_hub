<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Xenia Ludus Hub</title>

    <!-- CSS van Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="">
    @include('includes.navbar')


    <main class="pb-20">
        @yield('content')
    </main>

    @include('includes.footer')
</body>

</html>