<x-create-layout>
    <x-slot name="cabecera">
        Compañías Aseguradoras
    </x-slot>
    {{-- <x-slot name="paso">
        Seleccione Compaía Aseguradora:
    </x-slot> --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-3xl bg-white border-b border-gray-200">
                    Seleccione Compaía Aseguradora:
                </div>
        </div>
    </div>
    <div class="py-2 max-w-xl mx-auto sm:px-6 lg:px-8 text-xl text-center border">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border">
            @foreach ($companias as $compania)
                @php
                    if ($companias_usuario->contains($compania)) {
                        $class = 'p-6 bg-white hover:bg-gray-50 border-b border-gray-200 text-gray-900 hover:text-black hover:text-decoration-line: underline';
                    } else {
                        $class = 'p-6 bg-gray-100 border-b border-gray-200 text-gray-400';
                    }
                @endphp
                <div class=" {{ $class }} ">
                    <a class="px-4 py-2" href=" {{ route('crear-cita-especialidad', $compania) }} ">
                        {{ $compania->denominacion }}
                    </a>
                </div>
            @endforeach
            {{-- <div class="p-6 bg-white border-b border-gray-200">
                <a class="px-4 py-2 " href="{{ route('ver-citas') }}">Ver
                    citas</a>
            </div> --}}
            {{-- <div class="p-6 bg-gray-200 border-b border-gray-500">
                <a class="px-4 py-2 rounded bg-green-" href="{{ route('crear-cita-compania') }}">Nueva cita</a>
            </div> --}}
        </div>
    </div>

    <div class="py-2 max-w-sm mx-auto sm:px-6 lg:px-8 text-center">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-gray-300 border-b border-gray-100 text-2xl">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 hover:underline">Volver</a>
            </div>
        </div>
    </div>
</x-create-layout>
