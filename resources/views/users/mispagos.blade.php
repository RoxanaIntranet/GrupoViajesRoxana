<x-approxana-layout>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="p-6 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('¡Bienvenido a <i>Viajes Roxana</i>,') !!} <b>{{ Auth::user()->name }}</b>!<br></div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __(
                                'En esta página podrás acceder a toda la información de tus viajes y datos. Mantener esta información actualizada es clave para garantizar una experiencia de viaje segura y adaptada a tus necesidades.',
                            ) !!}
                        </p>

                    </div>
                    <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                        <img src="/images/rox.png" alt="" class="pb-0 w-64">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-4">
                <div>
                    <button
                        class="w-full rounded-md border-1 px-3.5 py-2 border-t-2 border-red-rv bg-red-rv text-white flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg> 
                        MI PERFIL
                    </button>
                </div>
                <div>
                    <button
                        class="w-full rounded-md border-1 px-3.5 py-2 border-t-2 border-red-rv bg-white text-black hover:bg-red-rv hover:text-white flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg> 
                        MIS VIAJES
                    </button>
                </div>
                <div>
                    <button
                        class="w-full rounded-md border-1 px-3.5 py-2 border-t-2 border-red-rv bg-white text-black hover:bg-red-rv hover:text-white flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg> 
                        MIS PAGOS
                    </button>
                </div>
                <div>
                    <button
                        class="w-full rounded-md border-1 px-3.5 py-2 border-t-2 border-red-rv bg-white text-black hover:bg-red-rv hover:text-white flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg> 
                        CONTACTO
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- mi perfil-->

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 px-12 gap-16 sm:grid-cols-3 bg-white px-4 py-8 rounded-s items-stretch">
                <div class="bg-white-rv border-red-rv border-2 rounded-lg flex-col flex p-4 items-center">
                    <div>
                        <h1 class="text-red-rv text-2xl font-bold">MIS DATOS</h1>
                    </div>
                    <div>
                        <img src="/images/data.png" alt="#">
                    </div>
                    <div>
                        <a href="{{ route('mis-datos') }}">
                            <x-roxana-button>
                                {{ __('VER MÁS') }}
                            </x-roxana-button>
                        </a>
                    </div>
                </div>
                <div class="bg-white-rv border-red-rv border-2 rounded-lg flex-col flex p-4 items-center">
                    <div>
                        <h1 class="text-red-rv text-2xl font-bold">MI FICHA MEDICA</h1>
                    </div>
                    <div>
                        <img src="/images/data.png" alt="#">
                    </div>
                    <div>
                        <a href="{{ route('mis-datos') }}">
                            <x-roxana-button>
                                {{ __('VER MÁS') }}
                            </x-roxana-button>
                        </a>
                    </div>
                </div>
                <div class="bg-white-rv border-red-rv border-2 rounded-lg flex-col flex p-4 items-center">
                    <div>
                        <h1 class="text-red-rv text-2xl font-bold">MIS DATOS</h1>
                    </div>
                    <div>
                        <img src="/images/data.png" alt="#">
                    </div>
                    <div>
                        <a href="{{ route('mis-datos') }}">
                            <x-roxana-button>
                                {{ __('VER MÁS') }}
                            </x-roxana-button>
                        </a>
                    </div>
                </div>                
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div x-data="{ modalOpen: true }" x-show="modalOpen && !localStorage.getItem('modalAccepted')"
        @click.away="modalOpen = false" class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-cloak>
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- Modal panel -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold  text-center tracking-tight text-gray-900 dark:text-white">
                            Términos y Condiciones</h5>
                    </a>
                    <p class="mb-4 px-20 font-normal text-gray-700 text-center dark:text-gray-400">Al ingresar al
                        sistema esta de acuerdo con los <a href="#" target="_blank" class="text-red-rv">términos
                            y condiciones.</a></p>
                    <div class="flex items-center mb-4 justify-center">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-red-rv dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estoy de acuerdo con los
                            terminos y condiciones.</label>
                    </div>
                    <div class="items-center text-center">
                        <a href="#" @click="localStorage.setItem('modalAccepted', 'true'); modalOpen = false;"
                            class="inline-flex items-center h-12 w-60  justify-center px-3 py-2 text-sm font-medium text-white bg-red-rv rounded-lg hover:bg-bdark-rv focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-rv dark:focus:ring-blue-800">
                            ACEPTAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-approxana-layout>

<script>
    // Asegúrate de tener Alpine.js cargado para controlar el modal
    window.addEventListener('DOMContentLoaded', () => {
        const modal = document.querySelector('.fixed');
        if (!localStorage.getItem('modalAccepted')) {
            modal.style.display = 'block'; // Muestra el modal si no se ha aceptado todavía
        }
    });
</script>
