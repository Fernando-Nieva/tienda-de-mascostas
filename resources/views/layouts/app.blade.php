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
            <x-nav-link href="{{ route('pets.index') }}" icon="fas fa-paw">
                Mascotas
            </x-nav-link>
            <x-nav-link href="{{ route('pets.create') }}" icon="fas fa-plus">
                Nueva Mascota
            </x-nav-link>
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