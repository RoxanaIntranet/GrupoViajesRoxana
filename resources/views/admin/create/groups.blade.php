<x-appadminroxana-layout>
    <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Crear Grupo</h2>
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <form>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label for="tipo_grupo" class="block text-sm font-medium text-gray-700">Tipo de Grupo</label>
                    <select id="tipo_grupo" name="tipo_grupo" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Seleccionar opción</option>
                        <!-- Opciones -->
                    </select>
                </div>
                <div>
                    <label for="tipo_viaje" class="block text-sm font-medium text-gray-700">Tipo de Viaje</label>
                    <select id="tipo_viaje" name="tipo_viaje" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Seleccionar opción</option>
                        <!-- Opciones -->
                    </select>
                </div>
                <div>
                    <label for="nombre_grupo" class="block text-sm font-medium text-gray-700">Nombre Grupo</label>
                    <input type="text" id="nombre_grupo" name="nombre_grupo" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="tipo_encargado" class="block text-sm font-medium text-gray-700">Tipo de Encargado</label>
                    <input type="text" id="tipo_encargado" name="tipo_encargado" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="nombre_encargado" class="block text-sm font-medium text-gray-700">Nombre de Encargado</label>
                    <input type="text" id="nombre_encargado" name="nombre_encargado" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="telefono_encargado" class="block text-sm font-medium text-gray-700">Teléfono de Encargado</label>
                    <input type="text" id="telefono_encargado" name="telefono_encargado" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="grado" class="block text-sm font-medium text-gray-700">Grado</label>
                    <input type="text" id="grado" name="grado" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="seccion" class="block text-sm font-medium text-gray-700">Sección</label>
                    <input type="text" id="seccion" name="seccion" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <button type="submit" class="px-6 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                    REGISTRAR GRUPO
                </button>
            </div>
        </form>
      </div>
</x-appadminroxana-layout>