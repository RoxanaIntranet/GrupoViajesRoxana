<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold"> Crear Cuota</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <form method="POST" action="{{ route('payments_admin.store') }}">
            @csrf
            <input type="text" style="display: none" name="id_group_user" value="{{$group_user->id}}">
            <div class="grid grid-cols-5 gap-5">
                <div>
                    <label for="usuario" class="block text-sm font-medium text-gray-700">Usuario</label>
                    <input type="text" id="usuario" readonly name="usuario" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$group_user->user->name}}" required>
                </div>
                <div>
                    <label for="codigo_viaje" class="block text-sm font-medium text-gray-700">Código de Viaje</label>
                    <input type="text" id="codigo_viaje" readonly name="codigo_viaje" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$group_user->group->travel->codigo_viaje}}" required>
                </div>
                <div>
                    <label for="monto" class="block text-sm font-medium text-gray-700">Monto</label>
                    <input type="text" id="monto" readonly name="monto" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$group_user->group->travel->costo_total}} {{$group_user->group->travel->tipo_moneda}}" required>
                </div>
                <div class="col-span-2 flex items-end space-x-2">
                    <button id="add-row" type="button" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                        +
                    </button>
                    <button id="remove-row" type="button" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                        -
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Vencimiento
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                        </tr>
                        </thead>
                        <tbody id="table-body" class="bg-white divide-y divide-gray-200">
                        <tr id="row-1">
                            <td class="px-2 py-1 whitespace-nowrap text-sm font-medium text-gray-900">
                                1° Cuota
                            </td>
                            <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">
                                <input type="date" name="fecha_1" class="border p-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </td>
                            <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">
                                <input type="number" name="precio_1" class="price-input border p-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" oninput="updateTotal()" placeholder="0.00" required>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-6 flex justify-between">
                <div>
                    <span class="font-medium text-gray-700">Total: </span><span id="total-price">$0.00</span>
                </div>
                <div>
                    <button type="submit" class="px-6 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                        REGISTRAR CUOTA
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-appadminroxana-layout>

<script>
    let rowCounter = 1;

    document.getElementById("add-row").addEventListener("click", function () {
        rowCounter++;
        const tableBody = document.getElementById("table-body");

        const newRow = document.createElement("tr");
        newRow.id = `row-${rowCounter}`;
        newRow.innerHTML = `
            <td class="px-2 py-1 whitespace-nowrap text-sm font-medium text-gray-900">
                ${rowCounter}° Cuota
            </td>
            <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">
                <input type="date" name="fecha_${rowCounter}" class="border p-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </td>
            <td class="px-2 py-1 whitespace-nowrap text-sm text-gray-500">
                <input type="number" name="precio_${rowCounter}" class="price-input border p-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" oninput="updateTotal()" placeholder="0.00" required>
            </td>
        `;
        tableBody.appendChild(newRow);
    });

    document.getElementById("remove-row").addEventListener("click", function () {
        if (rowCounter > 1) {
            const tableBody = document.getElementById("table-body");
            const lastRow = document.getElementById(`row-${rowCounter}`);
            if (lastRow) {
                tableBody.removeChild(lastRow);
                rowCounter--;
            }
        }
    });

    function updateTotal() {
        let total = 0;
        document.querySelectorAll(".price-input").forEach(input => {
            const value = parseFloat(input.value) || 0;
            total += value;
        });
        document.getElementById("total-price").textContent = `$${total.toFixed(2)}`;
    }
</script>
