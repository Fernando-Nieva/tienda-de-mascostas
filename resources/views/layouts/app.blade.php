<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('title', 'Sistema de Mascotas')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="header">
<h1>🐾 Tienda de Mascotas</h1>
<nav>
<a href="{{ route('pets.index') }}">🐶 Listado</a>
<a href="{{ route('pets.create') }}">➕ Nueva Mascota</a>
</nav>
</header>
<main class="container">
@yield('content')
</main>
<footer class="footer">
Programación III - Laravel 13
</footer>
</body>
</html>
