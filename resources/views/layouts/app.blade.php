<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda de Mascotas')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1><i class="fas fa-paw"></i> Tienda de Mascotas</h1>
        <nav>
            <a href="{{ route('pets.index') }}"><i class="fas fa-paw"></i> Mascotas</a>
            <a href="{{ route('pets.create') }}"><i class="fas fa-plus"></i> Nueva Mascota</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Tienda de Mascotas</p>
    </footer>
</body>
</html>