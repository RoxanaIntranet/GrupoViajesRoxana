<!-- Enlaces a DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css">
<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Ver Pasajeros</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <div class="overflow-x-auto">
            <table id="passengers-table">
                <thead >
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Apellidos</th>
                    <th class="border border-gray-300 px-4 py-2">Teléfono</th>
                    <th class="border border-gray-300 px-4 py-2">Username</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Tipo de Documento</th>
                    <th class="border border-gray-300 px-4 py-2">Nr de Documento</th>
                    <th class="border border-gray-300 px-4 py-2">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($passengers as $passenger)
                    <tr >
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->id}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->name}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$passenger->apellidos}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->telefono}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->username}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->email}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->tip_documento}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{$passenger->documento}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{route('payments_admin.index.payments_users',$passenger->id)}}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    <i class="fas fa-pen">Pagos</i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#passengers-table').DataTable({
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json" // Español
                },
                layout: {
                    topStart: {
                        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                    }
                }
            });
        });
    </script>
</x-appadminroxana-layout>
