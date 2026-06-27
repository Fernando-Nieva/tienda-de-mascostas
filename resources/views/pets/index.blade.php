@extends('layouts.app')
@section('title', 'Listado de Mascotas')
@section('content')
<x-card>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-800">
            Directorio de Mascotas
        </h2>
        <x-btn href="{{ route('pets.create') }}" icon="fas fa-plus" variant="bg-green-600 hover:bg-green-700 text-white">
            Registrar Nueva Mascota
        </x-btn>
    </div>

    @if(session('success'))
        <x-alert class="bg-green-100 text-green-800 border-l-4 border-green-500">
            {{ session('success') }}
        </x-alert>
    @endif

    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td class="font-semibold">{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->age }} años</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $pets->links() }}
    </div>
</x-card>
@endsection