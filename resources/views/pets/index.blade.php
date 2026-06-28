@extends('layouts.app')
@section('title', 'Listado de Mascotas')

@section('content')

<div class="card">
    <h2>Directorio de Mascotas</h2>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="actions">
        <a href="{{ route('pets.create') }}" class="btn">
            ➕ Registrar Nueva Mascota
        </a>
    </div>

    <div class="filter-box">
        <form method="GET" action="{{ route('pets.index') }}">
<label>Buscar:</label>
<input type="text" name="buscar" placeholder="Nombre o especie..." value="{{ request('buscar') }}">
            <button type="submit" class="btn">Buscar</button>
            <a href="{{ route('pets.index') }}" class="btn btn-secondary">Limpiar</a>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td class="name">{{ $pet->name }}</td>
                <td><span class="badge">{{ $pet->species }}</span></td>
                <td>{{ $pet->age }} años</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="empty">No hay mascotas registradas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $pets->links() }}
</div>

@endsection