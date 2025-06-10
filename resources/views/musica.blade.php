@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-white p-4 text-center">
    <h1 class="text-3xl font-bold mb-4">Tiroteo - Marc Seguí y Pol Granch</h1>
    <!-- Botones flotantes con letras de la canción -->
    <button class="absolute bottom-20 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">
        Tiroteo, Tiroteo, Tiroteo
    </button>
    <button class="absolute bottom-32 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        La noche pasa lento
    </button>
    <button class="absolute bottom-44 left-1/2 transform -translate-x-1/2 bg-purple-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-purple-600 transition duration-300">
        Y tú no estás aquí
    </button>
</div>
@endsection
