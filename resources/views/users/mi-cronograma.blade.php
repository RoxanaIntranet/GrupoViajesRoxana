<x-approxana-layout>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3">
                <div class="flex flex-col md:flex-row justify-between items-center col-span-2">
                    <div class="p-5 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('¡Hola ,') !!} <b>{{ Auth::user()->name }} {{ Auth::user()->apellidos }}</b>!<br>
                        </div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __(
                                'Aquí puedes visualizar tu cronograma de pagos de manera sencilla y rápida. Revisa las fechas de vencimiento, el monto y el número de cuota.',
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                    <img src="/images/nurse.png" alt="" class="pb-0 w-64">
                </div>
            </div>
        </div>
    </div>


    <!--- div formulario --->

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- MIS DATOS PERSONALES -->
            <x-texthead>
                {{ __('Cronograma') }}
            </x-texthead>

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class=" w-full text-white bg-red-rv hover:bg-red-rv 
                 font-medium rounded-lg  px-5 py-2.5  flex flex-wrap justify-between items-center my-4"
                type="button">
                <p class=" font-black text-lg">Viaje a Cancún <span class=" font-thin"> Código de programa: VPPE01</span></p>
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow max-w-7xl dark:bg-gray-700" >

                <div class="bg-red-rv w-full p-6">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Cuota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha Vencimiento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Moneda
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Monto
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        04/04/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Dolares
                                    </td>
                                    <td class="px-6 py-4">
                                        $300
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        2
                                    </th>
                                    <td class="px-6 py-4">
                                        04/05/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Dolares
                                    </td>
                                    <td class="px-6 py-4">
                                        $300
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        3
                                    </th>
                                    <td class="px-6 py-4">
                                        04/06/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Dolares
                                    </td>
                                    <td class="px-6 py-4">
                                        $300
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        4
                                    </th>
                                    <td class="px-6 py-4">
                                        04/07/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Dolares
                                    </td>
                                    <td class="px-6 py-4">
                                        $300
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        5
                                    </th>
                                    <td class="px-6 py-4">
                                        04/08/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Dolares
                                    </td>
                                    <td class="px-6 py-4">
                                        $300
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- BOTONES GUARDAR -->

            <div class="my-10 grid grid-cols-2 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="text-start">
                    <a href="#">Volver</a>
                </div>
                <!--<div>
                    <button type="submit"
                        class="block w-full rounded-md bg-red-rv px-3.5 py-2.5 
                        text-center text-sm font-semibold text-white shadow-sm 
                        hover:bg-red-rv focus-visible:outline 
                        focus-visible:outline-2 focus-visible:outline-offset-2
                         focus-visible:outline--red-rv">
                        DESCARGAR TODO
                    </button>
                </div>-->
                <div class="text-end">
                    <a href="#">Siguiente</a>
                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</x-approxana-layout>
