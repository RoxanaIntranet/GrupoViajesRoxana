<x-approxana-layout>
    <div class="mt-10 text-center sm:text-left">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3">
                <div class="flex justify-center">
                    <img src="/images/rox-left.png" alt="" class="pb-0 w-60">
                </div>
                <div class="text-black col-span-2 flex flex-col justify-center">
                    <p class="font-bold text-4xl max-sm:text-3xl max-sm:text-left">
                        ¡Hola {{ explode(' ', Auth::user()->name)[0] }}
                        {{ explode(' ', Auth::user()->apellidos)[0] }}!
                    </p>
                    <p class="mt-4 text-white-rv-400 text-base font-normal">
                        Aquí podras acceder a toda información de tus viajes y datos
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
                     bg-white flex flex-col justify-center items-center hover:shadow-xl">
                        <p class="font-bold text-3xl py-10">Mi Perfil</p>
                        <p class="text-center px-8">Sobre tus datos, ficha médica y ficha nutricional</p>
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
                     bg-white flex flex-col justify-center items-center hover:shadow-xl">
                        <p class="font-bold text-3xl py-10">Mis Viajes</p>
                        <p class="text-center px-8">Sobre tus viajes, itinerario, fotos/videos y documentos</p>
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
                    <div class="flex items-center justify-center max-sm:m-4 grayscale-1">

                        <a href="{{ route('mi-checkin.show') }}"
                            class=" w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                         bg-white flex flex-col justify-center items-center hover:shadow-xl">
                            <p class="font-bold text-3xl py-10 text">Registro de Maleta</p>
                            <p class="text-center px-8">Registrar o visualiza los equipajes para tu viaje</p>
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
                                    <p class="text-sm text-red-rv text-center">Se habilitara un día antes del vuelo</p>
                                    <p class="text-sm text-red-rv text-center">(solo para viajes con avión)</p>-->
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center max-sm:m-4 grayscale">
                    <a
                        class="w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl
                     bg-white flex flex-col justify-center items-center hover:shadow-xl cursor-pointer">
                        <p class="font-bold text-3xl py-10">Mis Pagos</p>
                        <p class="text-center px-4">Sobre tus estados de pagos, cronogramas y registro de pagos</p>
                        <img src="/images/mipago_vr.png" alt="#" class="py-8">
                        <hr class="my-3 w-full border border-gray-300">
                        <div class="flex flex-col items-center pb-2 gap-0">
                            <!--<p class="text-2xl">
                                Entrar
                            </p>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>-->
                            <p class="bg-gray-400 text-white text-center px-6 py-1">NO DISPONIBLE</p>
                        </div>
                    </a>
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
                    <a>
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">
                            Términos y Condiciones</h5>
                    </a>
                    <p class="mb-4 px-4 font-normal text-gray-700 text-center dark:text-gray-400">Al ingresar al
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
    </div>
</x-approxana-layout>