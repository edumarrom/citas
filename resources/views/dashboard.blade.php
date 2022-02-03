<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-3xl bg-white border-b border-gray-200">
                    Bienvenido, {{ Auth::user()->name }}.
                </div>
            </div>
        </div>
        <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8 text-xl">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="px-4 py-2 text-gray-900 hover:text-black hover:underline"
                        href="{{ route('ver-citas') }}">Ver citas</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="px-4 py-2 text-gray-900 hover:text-black hover:underline"
                        href="{{ route('crear-cita') }}">Crear una cita</a>
                </div>
                {{-- <div class="p-6 bg-gray-200 border-b border-gray-500">
                    <a class="px-4 py-2 rounded bg-green-" href="{{ route('crear-cita-compania') }}">Nueva cita</a>
                </div> --}}
            </div>
        </div>

        <div class="max-w-sm mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-gray-300 border-b border-gray-100 text-2xl">
                    <form action="{{ route('logout') }}" method="POST">
                        @method('POST')
                        @csrf
                        <button class="px-4 py-2 text-gray-900 hover:text-black hover:underline"
                            type="submit">Salir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
