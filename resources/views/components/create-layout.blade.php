<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $cabecera }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Deberia servir para tener un mensaje personalizado en cada pantallas --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-slot name="paso">
                    <div class="p-6 text-3xl bg-white border-b border-gray-200">
                        {{ $paso }}
                    </div>
                </x-slot>
            </div>
        </div> --}}
        {{ $slot }}
    </div>
</x-app-layout>
