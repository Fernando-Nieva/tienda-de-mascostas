@extends('layouts.app')
@section('title', 'Listado de Mascotas')
@section('content')
<div class="bg-white rounded-xl shadow p-6">
 <div class="flex justify-between items-center mb-6">
 <h2 class="text-2xl font-bold text-slate-800">
 Directorio de Mascotas
 </h2>
 <a
 href="{{ route('pets.create') }}"
  class="bg-green-600 hover:bg-green-700 text-white px-4 py-2
rounded-lg transition"
  >
  <i class="fas fa-plus"></i> Registrar Nueva Mascota
 </a>
 </div>
 @if(session('success'))
 <div class="bg-green-100 text-green-800 px-4 py-3 rounded-lg
mb-4">
 {{ session('success') }}
 </div>
 @endif
 <div class="overflow-x-auto">
 <table class="w-full border-collapse">
 <thead>
 <tr class="bg-slate-800 text-white">
 <th class="px-4 py-3 text-left">ID</th>
 <th class="px-4 py-3 text-left">Nombre</th>
 <th class="px-4 py-3 text-left">Especie</th>
 <th class="px-4 py-3 text-left">Edad</th>
 </tr>
 </thead>
 <tbody>
 @foreach($pets as $pet)
 <tr class="border-b hover:bg-gray-100">
 <td class="px-4 py-3">{{ $pet->id }}</td>
 <td class="px-4 py-3 font-semibold">{{
$pet->name }}</td>
 <td class="px-4 py-3">{{ $pet->species }}</td>
 <td class="px-4 py-3">{{ $pet->age }} años</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 <div class="mt-6">
 {{ $pets->links() }}
 </div>
</div>
@endsection
