<x-app-layout>
    <x-slot name="header">
    <!-- <div class="flex flex-col items-center justify-center min-h-screen bg-white relative"> -->
        <div class="flex flex-col items-center pt-10 bg-white min-h-screen relative">

    <h1 class="text-3xl font-bold mb-6">🎵 Tiroteo - Marc Seguí & Pol Granch</h1>

    <button id="playButton"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition">
        <a href="{{ route('lluvia') }}">
        ▶️ Play
    </button>
    </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
