@extends('layouts.app')
@section('title', 'Registrar Mascota')
@section('content')
<x-card class="max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-slate-800">
        Registrar Nueva Mascota
    </h2>

    <form action="{{ route('pets.store') }}" method="POST" class="space-y-4">
        @csrf

        <x-input-field name="name" label="Nombre" required />

        <x-input-field name="species" label="Especie" required />

        <x-input-field name="age" label="Edad" type="number" required />

        <div class="flex gap-3 pt-4">
            <x-btn type="submit" icon="fas fa-floppy-disk" variant="bg-green-600 hover:bg-green-700 text-white">
                Guardar Mascota
            </x-btn>
            <x-btn href="{{ route('pets.index') }}" variant="bg-gray-500 hover:bg-gray-600 text-white">
                Volver
            </x-btn>
        </div>
    </form>
</x-card>
@endsection