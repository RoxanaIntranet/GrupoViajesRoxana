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
                    <p>Ir a Inicio</p>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left">
        <div class="max-w-7xl mx-auto mt-10 mb-8 sm:px-6 lg:px-8">
            <div class="text-center gap-6 mb-8">
                <h3 class=" font-normal text-5xl">Mis Viajes</h3>
            </div>
            <div class=" text-center px-64 max-sm:px-4">
                <p>En este área puedes descargar todos los documentos para tu próximo viaje.
                     Además, asegúrate de actualizar tu agenda con los consejos prácticos
                      que hemos preparado para ti. <span class="text-red-rv">¡Explora y prepárate para una experiencia
                       de viaje inolvidable!</span></p>
            </div>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left pb-6">
        <div class="max-w-7xl mx-auto mt-6 sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-x-14 max-sm:grid-cols-1 max-sm:px-4">
                @foreach($groups as $group)
                <a href="{{ route('tu-viaje', ['groupId' => $group->groupID]) }}">
                    <div class="bg-white rounded-lg overflow-hidden mb-5  max-sm:my-4">
                        <div class="pt-4 pl-4">
                            <h3 class=" font-bold text-2xl">{{ $group->travel->nombre_viaje }}</h3>
			                <p class=" text-lg"> Grupo: {{ $group->nombre_grupo }}</p>
                            <p class=" font-normal text-base">{{ Carbon::parse($group->travel->fecha_viaje)->translatedFormat('d \\d\\e F Y') }}</p>
                        </div>
                        @if($group->travel->travel_image)
                                <img src="{{ asset('images/' . $group->travel->travel_image) }}" alt="Imagen de {{ $group->travel->nombre_viaje }}" class="w-full h-auto rounded-b-lg  mt-4">
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</x-approxana-layout>
