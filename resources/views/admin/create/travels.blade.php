<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Crear Viajes</h2>
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <form>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label for="codigo" class="block text-sm font-medium text-gray-700">Código de Paquete</label>
                    <input type="text" id="codigo" name="codigo" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="nombre_viaje" class="block text-sm font-medium text-gray-700">Nombre de Viaje</label>
                    <input type="text" id="nombre_viaje" name="nombre_viaje" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="destino" class="block text-sm font-medium text-gray-700">Destino</label>
                    <input type="text" id="destino" name="destino" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="fecha_viaje" class="block text-sm font-medium text-gray-700">Fecha de Viaje</label>
                    <input type="text" id="fecha_viaje" name="fecha_viaje" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="plan_adquirido" class="block text-sm font-medium text-gray-700">Plan Adquirido</label>
                    <select id="plan_adquirido" name="plan_adquirido" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Seleccionar opción</option>
                        <!-- Opciones -->
                    </select>
                </div>
                <div>
                    <label for="nombre_hotel" class="block text-sm font-medium text-gray-700">Nombre Hotel</label>
                    <input type="text" id="nombre_hotel" name="nombre_hotel" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class=" flex">
                    <div class="w-full">
                        <label for="itinerario" class="block text-sm font-medium text-gray-700">Itinerario</label>
                        <input type="text" id="itinerario" name="itinerario" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button type="button" class="mt-6 ml-2 bg-gray-200 p-2 rounded-md">SUBIR</button>
                </div>
                <div class=" flex">
                    <div class="w-full">
                        <label for="fotos_videos" class="block text-sm font-medium text-gray-700">Fotos y Videos</label>
                        <input type="text" id="fotos_videos" name="fotos_videos" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button type="button" class="mt-6 ml-2 bg-gray-200 p-2 rounded-md">SUBIR</button>
                </div>
                <div class=" flex">
                    <div class="w-full">
                        <label for="indicaciones" class="block text-sm font-medium text-gray-700">Indicaciones</label>
                        <input type="text" id="indicaciones" name="indicaciones" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button type="button" class="mt-6 ml-2 bg-gray-200 p-2 rounded-md">SUBIR</button>
                </div>
                <div class=" flex">
                    <div class="w-full">
                        <label for="recomendaciones" class="block text-sm font-medium text-gray-700">Recomendaciones</label>
                        <input type="text" id="recomendaciones" name="recomendaciones" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button type="button" class="mt-6 ml-2 bg-gray-200 p-2 rounded-md">SUBIR</button>
                </div>
                <div class="flex">
                    <div class="w-full">
                        <label for="ropa" class="block text-sm font-medium text-gray-700">¿Qué ropa llevo?</label>
                        <input type="text" id="ropa" name="ropa" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <button type="button" class="mt-6 ml-2 bg-gray-200 p-2 rounded-md">SUBIR</button>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <button type="submit" class="px-6 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                    REGISTRAR VIAJE
                </button>
            </div>
        </form>
      </div>
</x-appadminroxana-layout>