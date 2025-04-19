<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="container mx-auto py-10 space-y-7">
    <div class="max-w-7xl mx-auto px-4">
        <h1>Bienvenido</h1>
    </div>

    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            Alerta!!
        </x-slot>
        Contenido de la alerta
    </x-alert2>

    <p>Hola Mundo</p>
</body>

</html>
