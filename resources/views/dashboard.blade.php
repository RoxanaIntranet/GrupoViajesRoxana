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
                        ¡Bienvenida a Viajes Roxana! Gestiona tu perfil, consulta tus viajes, registra 
                        tu equipaje y realiza tus pagos en un solo lugar.
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
                        class=" w-11/12 border-2 border-gray-400 px-3.5 py-4 rounded-xl bg-white 
                        flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv hover:border-2">
                        <p class="font-bold text-3xl py-10">Mi Perfil</p>
                        <p class="text-center px-8">Gestiona y accede a tus datos, ficha médica y ficha nutricional.</p>
                        <img src="/images/perfilvr.png" alt="#" class="py-8 w-28">
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
                        <p class="text-center px-8">Accede a la información de tus viajes, itinerarios, videos y documentos que necesitas.</p>
                        <img src="/images/viajevr.png" alt="#" class="py-8 w-28">
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
                         bg-white flex flex-col justify-center items-center hover:shadow-xl hover:border-red-rv">
                            <p class="font-bold text-3xl py-10 text">Equipaje</p>
                            <p class="text-center px-8  ">
                                Consulta y registra tus equipajes fácilmente. <br><span class="text-xs">(disponible 24 horas antes del viaje)</span>
                            </p>
                            <img src="/images/maletavr.png" alt="#" class="py-8 w-28">
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
                        <p class="text-center px-4">Registra tus pagos, consulta estados, cronogramas, historial y obtén recibos de forma sencilla.</p>
                        <img src="/images/pagovr.png" alt="#" class="py-8 w-28">
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
                            <!--<p class="bg-gray-400 text-white text-center px-6 py-1">NO DISPONIBLE</p>-->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-approxana-layout>