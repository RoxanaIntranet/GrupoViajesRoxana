<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Ver Viajes</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Código</th>
                    <th class="border border-gray-300 px-4 py-2">Paquete</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre Viaje</th>
                    <th class="border border-gray-300 px-4 py-2">Destino</th>
                    <th class="border border-gray-300 px-4 py-2">Fecha de Viaje</th>
                    <th class="border border-gray-300 px-4 py-2">Itinerario</th>
                    <th class="border border-gray-300 px-4 py-2">Ropa</th>
                    <th class="border border-gray-300 px-4 py-2">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($travels as $travel)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$travel->travelID}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$travel->travelID}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$travel->nombre_viaje}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$travel->destino}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$travel->fecha_viaje}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-file"></i>
                            </button>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-file"></i>
                            </button>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-appadminroxana-layout>
