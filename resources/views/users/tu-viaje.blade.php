@php
use Carbon\Carbon;
Carbon::setLocale('es');
@endphp
<x-approxana-layout>

    <div class="mt-6 text-center sm:text-left">
        <div class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 flex flex-row justify-between max-sm:flex-col max-sm:px-4">
            <div>
                <a href="{{ route('dashboard') }}"
                    class="flex flex-row items-center gap-4 border-2 border-gray-400 rounded-full w-48 py-2 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                    <p>Ir a mis Viajes</p>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left pb-2">
        <div class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 flex flex-col justify-between max-sm:flex-col max-sm:px-4">
            <div>
                <h2 class=" text-4xl pt-4 pb-2"><b>{{ $viaje->nombre_viaje }}</b></h2>
                <p class=" text-lg py-2">Fecha: {{ Carbon::parse($viaje->fecha_viaje)->translatedFormat('d \\d\\e F Y') }}</p>
            </div>
            <div class=" bg-white rounded-b-lg shadow-lg">
                <div class="pl-6 py-4 max-sm:text-left">
                    <p class=" text-lg pt-2"> <span class=" text-gray-500 font-semibold"> Grupo: </span>{{ $group->nombre_grupo }}</p>
                    <div class="flex flex-row gap-5 max-sm:flex-col max-sm:gap-0">
                        <p class=" text-lg pb-2"> <span class=" text-gray-500 font-semibold">Responsable: </span>{{ $group->nombre_encargado }}</p>
                        <p class=" text-lg pb-2"><span class=" text-gray-500 font-semibold">Teléfono: </span> +51 {{ $group->telefono_encargado }}</p>
                    </div>
                </div>
                <img src="{{ asset('images/' . $viaje->travel_image) }}" alt="{{ $viaje->nombre_viaje }}" class="w-full">
                <div class=" p-12 max-sm:px-10  ">
                    <div>
                        <h4 class=" font-bold text-xl">Itinerario</h4>
                    </div>
                    <div class="flex flex-row items-center gap-4 max-sm:flex-col">
                        <div class="border-2 border-gray-500 ">
                            <p><img src="/images/Icons_ItinerarioPDF.png" alt="" class="w-28"></p>
                            @if (!empty($viaje->itinerario))
                            <p class=" bg-green-600 text-white px-2">Disponible</p>
                            @else
                            <p class=" bg-gray-500 text-white px-2">No Disponible</p>
                            @endif
                        </div>
                        <div>
                            <p class="py-2">Revisa el itinerario antes del viaje<br>
                                para conocer de todas las actividades programadas.</p>
                            @if($viaje->itinerario)
                            <a class=" border-2 border-gray-500 rounded-full px-16 py-2 inline-block"
                                href="{{ route('download-itinerario', ['groupId' => $viaje->groupID]) }}">Ver</a>
                            @else
                            <span class="border-2 border-gray-500 rounded-full px-16 py-2 inline-block text-gray-400 cursor-not-allowed">
                                Ver
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left pb-2">
        <div
            class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 flex flex-row
         justify-between max-sm:flex-col max-sm:px-4">
            <div class="bg-white rounded-b-lg shadow-lg w-full flex flex-row p-12 gap-5 max-sm:flex-col">
                <div class=" basis-1/2">
                    <div class="flex flex-row gap-1 items-center max-sm:flex-col">
                        <p class="font-bold text-xl">Fotos y videos del viaje</p>
                        <p class=" bg-gray-500 text-white px-2">Próximamente</p>
                    </div>
                    <div class="flex flex-row gap-1 items-center max-sm:flex-col">
                        <img src="/images/FotosyVideos01.png" alt="" class="w-52">
                        <a class=" border-2 border-gray-500 rounded-full px-8 py-2 inline-block" href="#">Ver en
                            Instagram</a>
                    </div>
                </div>
                <div class=" basis-1/2">
                    <div class="flex flex-row gap-1 items-center pb-4 max-sm:flex-col">
                        <p class="font-bold text-xl">Metraje del Viaje</p>
                        <p class="bg-gray-500 text-white px-2">Próximamente</p>
                    </div>
                    <div class="relative">
                        <img src="/images/difuminado.jpg" class=" w-3/4 max-sm:w-full">
                        <a class="border-2 border-gray-500 rounded-full absolute left-28 top-24 max-sm:left-14 max-sm:top-15
                         px-8 py-2 inline-block bg-white"
                            href="#">Ver en Youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left pb-6 items-center">
        <div class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 flex flex-row justify-between max-sm:flex-col max-sm:px-4">
            <div class="bg-white rounded-b-lg shadow-lg w-full grid grid-cols-4 p-12 gap-5">
                <div class=" col-span-4">
                    <p class="font-bold text-xl">Documentos del viaje</p>
                </div>
                <div class="col-span-4 flex flex-row max-sm:flex-col max-sm:items-center">
                    <div class=" col-span-2 basis-1/4 flex flex-row items-center gap-2 max-sm:pb-8">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="py-2 max-sm:text-left">Indicaciones</p>
                                <img src="/images/Icons_ItinerarioPDF.png" alt="" class="w-28">
                                @if (!empty($viaje->indicaciones))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->indicaciones)
                                    <a class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block"
                                        href="{{ route('download-indicaciones', ['groupId' => $viaje->groupID]) }}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" basis-1/4 flex flex-row items-center gap-2 max-sm:pb-8">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="pt-2 leading-5 text-center">Reglamento Estudiante</p>
                                <p><img src="/images/Icons_ItinerarioPDF.png" alt="" class="w-28"></p>
                                @if (!empty($viaje->recomendaciones))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->recomendaciones)
                                    <a class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block"
                                        href="{{ route('download-recomendaciones', ['groupId' => $viaje->groupID]) }}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" basis-1/4 flex flex-row items-center gap-2 max-sm:pb-8">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="py-2 max-sm:text-left">Ropa de Viaje</p>
                                <p><img src="/images/Icons_ItinerarioPDF.png" alt="" class="w-28"></p>
                                @if (!empty($viaje->ropa_viaje))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->ropa_viaje)
                                    <a class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block"
                                        href="{{ route('download-ropaviajes', ['groupId' => $viaje->groupID]) }}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" basis-1/4 flex flex-row items-center gap-2 max-sm:pb-8">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="py-2 max-sm:text-left">Permiso Notarial</p>
                                <p><img src="/images/Icons_ItinerarioPDF.png" alt="" class="w-28"></p>
                                @if (!empty($viaje->permiso_notarial))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->permiso_notarial)
                                    <a class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block"
                                        href="{{ route('download-permisonotarial', ['groupId' => $viaje->groupID]) }}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <p class="font-bold text-xl">Tarjeta de Asistencia Médica del viaje</p>
                </div>
                <div class="col-span-4 flex flex-row max-sm:flex-col max-sm:items-center">
                    <div class=" basis-1/2 flex flex-row items-center gap-2 max-sm:pb-8 ">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="py-2 max-sm:text-left">Voucher</p>
                                <p><img src="/images/Icons_Vaucher.png" alt="" class="w-28"></p>
                                @if (!empty($viaje->voucher))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->indicaciones)
                                    <a  class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block"
                                        href="{{ route('download-voucher', ['groupId' => $viaje->groupID]) }}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" basis-1/2 flex flex-row items-center gap-2">
                        <div>
                            <div class="border-2 border-gray-500 w-44 flex flex-col items-center rounded-lg">
                                <p class="pt-2 leading-5 text-center">Lista de Clinicas Cercanas al Hotel</p>
                                <p><img src="/images/Icons_Clinicas.png" alt="" class="w-28"></p>
                                @if (!empty($viaje->lista_clinicas))
                                <p class="bg-green-600 text-white px-2 w-full text-center">Disponible</p>
                                @else
                                <p class="bg-gray-500 text-white px-2 w-full text-center">No Disponible</p>
                                @endif
                                <div class="text-left flex flex-col">
                                    @if($viaje->indicaciones)
                                    <a  class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block" 
                                        href="{{ route('download-listaclinicas', ['groupId' => $viaje->groupID])}}">Ver</a>
                                    @else
                                    <span
                                        class="my-2 border-2 border-gray-500 rounded-full px-12 py-1 inline-block">
                                        Ver
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-approxana-layout>