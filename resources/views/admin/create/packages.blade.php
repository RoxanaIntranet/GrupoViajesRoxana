<x-appadminroxana-layout>
  <h2 class="m-12 text-bdark-rv text-2xl font-bold "> Crear Paquetes</h2>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-12 mb-4 flex flex-col my-2">
        <form>
          <div class="grid grid-cols-3 gap-4">
              <div>
                  <label for="codigo" class="block text-sm font-medium text-gray-700">Código de Paquete</label>
                  <input type="text" id="codigo" name="codigo" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="programa" class="block text-sm font-medium text-gray-700">Programa</label>
                  <input type="text" id="programa" name="programa" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="dias" class="block text-sm font-medium text-gray-700">Días</label>
                  <input type="text" id="dias" name="dias" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="hotel" class="block text-sm font-medium text-gray-700">Hotel</label>
                  <input type="text" id="hotel" name="hotel" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="doble" class="block text-sm font-medium text-gray-700">Doble y Triple</label>
                  <input type="text" id="doble" name="doble" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="tour" class="block text-sm font-medium text-gray-700">Tour</label>
                  <input type="text" id="tour" name="tour" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="alojamiento" class="block text-sm font-medium text-gray-700">Alojamiento</label>
                  <input type="text" id="alojamiento" name="alojamiento" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div>
                  <label for="traslado" class="block text-sm font-medium text-gray-700">Traslado</label>
                  <select id="traslado" name="traslado" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Seleccionar opción</option>
                      <!-- Opciones -->
                  </select>
              </div>
              <div>
                  <label for="pconscientizacion" class="block text-sm font-medium text-gray-700">P.Concientización</label>
                  <select id="pconscientizacion" name="pconscientizacion" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Seleccionar opción</option>
                      <!-- Opciones -->
                  </select>
              </div>
              <div>
                  <label for="almuerzo" class="block text-sm font-medium text-gray-700">Almuerzo</label>
                  <select id="almuerzo" name="almuerzo" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Seleccionar opción</option>
                      <!-- Opciones -->
                  </select>
              </div>
              <div>
                  <label for="doctor" class="block text-sm font-medium text-gray-700">Doctor</label>
                  <select id="doctor" name="doctor" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Seleccionar opción</option>
                      <!-- Opciones -->
                  </select>
              </div>
              <div>
                  <label for="kiddelviajero" class="block text-sm font-medium text-gray-700">Kid del Viajero</label>
                  <select id="kiddelviajero" name="kiddelviajero" class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Seleccionar opción</option>
                      <!-- Opciones -->
                  </select>
              </div>
          </div>
          <div class="mt-6 flex justify-center">
              <button type="submit" class="px-6 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                  REGISTRAR PAQUETE
              </button>
          </div>
      </form>
    </div>
</x-appadminroxana-layout>