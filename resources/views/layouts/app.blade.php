<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | @yield("title")</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @stack('css')
</head>

<body class="container mx-auto py-10 space-y-7">
    <header></header>

    <main>
        @yield('content')
    </main>

    <footer></footer>
</body>

</html>
