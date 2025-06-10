@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-64 bg-gray-200 p-4">
        <h2 class="text-xl font-semibold mb-4">Sidebar</h2>
        <ul>
            <li><a href="{{ route('inicio') }}" class="block py-2 px-4 hover:bg-gray-300">Inicio</a></li>
            <li><a href="{{ route('love') }}" class="block py-2 px-4 hover:bg-gray-300">Love</a></li>
        </ul>
    </div>
    <div class="flex-1 p-4">
        <h1 class="text-2xl font-bold">Página de Inicio</h1>
        <p>Contenido de la página de inicio.</p>
    </div>
</div>
@endsection
