<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis citas
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col items-center">
                    <div class="flex flex-col items-center mt-4">
                        <div class="border border-gray-200 shadow">
                            <table>
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-l text-gray-500">
                                            Fecha y hora
                                        </th>
                                        <th class="px-6 py-2 text-l text-gray-500">
                                            Especialista
                                        </th>
                                        <th class="px-6 py-2 text-l text-gray-500">
                                            Especialidad
                                        </th>
                                        <th class="px-6 py-2 text-l text-gray-500">
                                            Compañía
                                        </th>
                                        <th class="px-6 py-2 text-l text-gray-500">
                                            Anular
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($citas as $cita)
                                        <tr class="whitespace-nowrap">
                                            <td class="px-6 py-4">
                                                <div class="text-m text-gray-900">
                                                    {{-- TODO: Hacer cositas con la fecha (Carbon?) --}}
                                                    {{ $cita->fecha_hora->locale('es_ES')->timezone('Europe/Madrid')->isoFormat('DD/MM/YYYY HH:mm') }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-m text-gray-900">
                                                    {{ $cita->especialista->nombre }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-m text-gray-900">
                                                    {{ $cita->especialista->especialidad->denominacion }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-m text-gray-900">
                                                    {{ $cita->compania->denominacion }}
                                                </div>
                                            </td>
                                            {{-- <td class="px-6 py-4">
                                                <form action="{{ route('anular-cita', $cita->id) }}" method="POST">
                                                    @method('DELETE')
                                                    <input class="px-4 py-1 text-sm text-white bg-red-400 rounded" type="submit" value="Anular">
                                                    @csrf
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 max-w-sm mx-auto sm:px-6 lg:px-8 text-center">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-gray-300 hover:bg-gray-400 border-b border-gray-100 text-2xl">
                <a href="{{ route('dashboard') }}" class="px-4 py-2 hover:underline">Volver</a>
            </div>
        </div>
    </div>
</x-app-layout>
