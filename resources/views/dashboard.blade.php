<x-approxana-layout>
    <div class="mt-10 text-center sm:text-left">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 max-sm:grid-cols-1 px-12">
                <div class="flex justify-center max-sm:hidden">
                    <img src="/images/rox-left.png" alt="" class="pb-0 w-60">
                </div>
                <div class="text-black col-span-2 flex flex-col justify-center">
                    <p class="font-bold text-4xl max-sm:text-3xl max-sm:text-center">
                        ¡Hola {{ explode(' ', Auth::user()->name)[0] }}
                        {{ explode(' ', Auth::user()->apellidos)[0] }}!
                    </p>
                    <p class="mt-4 text-white-rv-400 text-base font-normal w-3/4 max-sm:text-center max-sm:w-full">
                        ¡Bienvenida a Viajes Roxana! Aquí podrás gestionar tu información personal,
                        acceder a detalles de tus viajes, registrar tu equipaje y revisar tus pagos.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-6">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-4 ">
                <div class="flex items-center justify-center max-sm:m-4">
                    <a href="{{ route('mi-perfil') }}"
                        class=" w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                     bg-white flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv hover:scale-110">
                        <p class="font-bold text-3xl py-10">Mi Perfil</p>
                        <p class="text-center px-8">Gestiona y accede a tus datos, ficha médica y ficha nutricional.</p>
                        <img src="/images/perfil_vr.png" alt="#" class="py-8">
                        <hr class="my-3 w-full border border-gray-300">
                        <div class="flex flex-row items-center pb-2 gap-4">
                            <p class="text-2xl">
                                Entrar
                            </p>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex items-center justify-center max-sm:m-4">
                    <a href="{{ route('viajes') }}"
                        class=" w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                     bg-white flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv">
                        <p class="font-bold text-3xl py-10">Mis Viajes</p>
                        <p class="text-center px-8">Accede a la información de tus viajes, itinerarios, videos y documentos en un solo lugar.</p>
                        <img src="/images/miviaje_vr.png" alt="#" class="py-8">
                        <hr class="my-3 w-full border border-gray-300">
                        <div class="flex flex-row items-center pb-2 gap-4">
                            <p class="text-2xl">
                                Entrar
                            </p>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <div class="flex items-center justify-center max-sm:m-4">

                        <a href="{{ route('mi-checkin.show') }}"
                            class=" w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                         bg-white flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv hover:border-3">
                            <p class="font-bold text-3xl py-6 text">Registro de Maleta</p>
                            <p class="text-center px-8  ">
                                Registra o consulta los detalles de tus equipajes fácilmente para tu viaje.
                                <span class="text-xs">(habilitada 24 horas antes)</span>
                            </p>
                            <img src="/images/maleta.png" alt="#" class="py-6">
                            <hr class="my-3 w-full border border-gray-300">
                            <div class="flex flex-row items-center pb-2 gap-0">
                                <p class="text-2xl">
                                    Entrar
                                    </p>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                </div>
                                <!--<p class="bg-gray-400 text-white text-center w-3/4">NO DISPONIBLE</p>
                                    <p class="text-sm text-red-rv text-center">(solo para viajes con avión)</p>-->
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center max-sm:m-4">
                    <a
                        href="{{ route('mis-pagos') }}"
                        class="w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                     bg-white flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv cursor-pointer">
                        <p class="font-bold text-3xl py-10">Mis Pagos</p>
                        <p class="text-center px-4">Registra tus pagos y consulta estados, cronogramas, historial y obtén recibos de forma sencilla.</p>
                        <img src="/images/mipago_vr.png" alt="#" class="py-8">
                        <hr class="my-3 w-full border border-gray-300">
                        <div class="flex flex-row items-center pb-2 gap-0">
                            <p class="text-2xl">
                                Entrar
                            </p>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                            <!--<p class="bg-gray-400 text-white text-center px-6 py-1">NO DISPONIBLE</p>-->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--<div x-data="{ modalOpen: true }" x-show="modalOpen && !localStorage.getItem('modalAccepted')"
        @click.away="modalOpen = false" class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-cloak>
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <a>
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">
                            Términos y Condiciones</h5>
                    </a>
                    <p class="mb-4 px-4 font-normal text-gray-700 text-center">Al ingresar al
                        sistema, Usted acepta los términos y condiciones:<br>
                        <a href="/pdfs/terminos-condiciones-generales.pdf" target="_blank"
                            class="text-red-rv text-left">1.Términos y condiciones generales.</a><br>
                        <a href="/pdfs/terminos-condiciones-intranet.pdf" target="_blank"
                            class="text-red-rv text-left">2.Términos y condiciones del intranet.
                        </a>
                    </p>
                    <div class="flex items-center mb-4 justify-center">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-red-rv bg-gray-100 border-red-rv rounded ring-2 ring-red-rv  focus:ring-red-rv dark:focus:ring-red-rv dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estoy de acuerdo con los
                            términos y condiciones.</label>
                    </div>
                    <div class="items-center text-center">
                        <button
                            @click="if (document.getElementById('default-checkbox').checked) { localStorage.setItem('modalAccepted', 'true'); modalOpen = false; }"
                            class="inline-flex items-center h-12 w-60 justify-center px-3 py-2 text-sm font-medium text-white bg-red-rv rounded-lg hover:bg-bdark-rv focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-rv dark:focus:ring-blue-800">
                            ACEPTAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</x-approxana-layout>