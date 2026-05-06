<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Xenia Ludus Hub</title>

    <!-- CSS van Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@include('includes.navbar')

<body >



    <main>
        @yield('content')
    </main>

</body>

</html>