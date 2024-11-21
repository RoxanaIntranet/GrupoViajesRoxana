<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Ver Pasajeros</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Tipo Grupo</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre Grupo</th>
                    <th class="border border-gray-300 px-4 py-2">Tipo Encargado</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre Encargado</th>
                    <th class="border border-gray-300 px-4 py-2">Telefono Encargado</th>
                    <th class="border border-gray-300 px-4 py-2">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($group_user as $passenger)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->travelID}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->tipo_grupo}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$passenger->nombre_grupo}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->tipo_encargado}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->nombre_encargado}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->telefono_encargado}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{route('payments_admin.index.payments_users_quota',$passenger->travelID)}}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    <i class="fas fa-pen">Cuota</i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-appadminroxana-layout>
