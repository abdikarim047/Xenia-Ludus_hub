<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Xenia Ludus Hub</title>

    <!-- CSS van Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0F1720]">

    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

</body>

</html>