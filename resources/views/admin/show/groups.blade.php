<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Ver Grupos</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Tipo de Grupo</th>
                    <th class="border border-gray-300 px-4 py-2">Tipo de Viaje</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre de Grupo</th>
                    <th class="border border-gray-300 px-4 py-2">Encargado</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Telefono</th>

                    <th class="border border-gray-300 px-4 py-2">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groups as $group)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$group->tipo_grupo}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$group->travelID}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$group->nombre_grupo}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$group->tipo_encargado}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$group->nombre_encargado}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$group->telefono_encargado}}</td>
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
