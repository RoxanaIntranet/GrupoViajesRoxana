<x-approxana-layout>
    <div class="mt-6 text-center sm:text-left">
        <div class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 max-sm:pl-8">
            <a href="{{ route('mis-pagos') }}"
                class="flex flex-row items-center gap-4 border-2 border-gray-400 rounded-full w-48 py-2 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                <p>Ir Inicio</p>
            </a>
        </div>
    </div>

    <div class="mt-6 text-center sm:text-left">
        <div class="max-w-6xl mx-auto my-10">
            <div class="flex flex-col max-sm:px-3">
                <p class="text-5xl">Viaje a <span class="font-bold">{{ $travel->nombre_viaje }}</span></p>
            </div>
            <div class="flex flex-row pt-4 gap-6">
                <p>Fecha: <span>{{ \Carbon\Carbon::parse($travel->fecha_viaje)->format('d \d\e F') }}</span></p>
                <p>Código de programa: <span>{{ $travel->codigo_viaje }}</span></p>
                <p>Pago Total de Viaje: S/ <span class="font-bold">{{ number_format($travel->costo_total, 2) }}</span></p>
            </div>
        </div>
    </div>
    
    

    <div class="pb-6">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white p-6">
                <div class="flex flex-row justify-between items-center border-b-2 border-gray-400 pb-4">
                    <p class="font-bold text-xl">Estado de Pagos</p>
                    <a href="" class="border px-8 py-2 rounded-full border-gray-500 hover:bg-red-rv hover:border-red-rv hover:text-white">Cronograma</a>
                </div>

                <div class="py-6 w-full">
                    <table class="table-fixed w-full text-center">
                        <thead>
                            <tr class="text-gray-400 my-4">
                                <th class="py-4 font-semibold">Cuota N°</th>
                                <th class="py-4 font-semibold">Monto (Dólares)</th>
                                <th class="py-4 font-semibold">Estado</th>
                                <th class="py-4 font-semibold">Observación</th>
                                <th class="py-4 font-semibold"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quotas as $quota)
                                <tr class="{{ $loop->even ? 'bg-gray-100' : '' }}">
                                    <td class="py-4">{{ $quota->quota }}</td>
                                    <td class="py-4">$USD {{ number_format($quota->amount, 2) }}</td>
                                    <td class="py-4">
                                        @if($quota->status_pay == 1)
                                            <span class="bg-green-300 px-2 py-1 rounded">Pagado</span>
                                        @else
                                            <span class="bg-yellow-300 px-2 py-1 rounded">Pendiente</span>
                                        @endif
                                    </td>
                                    <td class="py-4">{{ $quota->resume }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-4 text-gray-500">No hay cuotas registradas para este viaje.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                </div>
                
            </div>
        </div>
    </div>

    <div class="pb-6">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white p-6">
                <div class="flex flex-row justify-between items-center border-b-2 border-gray-400 pb-4">
                    <p class="font-bold text-xl">Resumen de Pagos</p>
                    <a href="" class="border px-8 py-2 rounded-full border-gray-500 hover:bg-red-rv hover:border-red-rv hover:text-white">Cronograma</a>
                </div>

                <div class="py-6 w-full">
                    <table class="table-fixed w-full text-center">
                        <thead>
                            <tr class="text-gray-400 my-4">
                                <th class="py-4 font-semibold">Descripción</th>
                                <th class="py-4 font-semibold">Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" bg-gray-100 py-4 ">
                                <td class="py-4">Total del viaje</td>
                                <td class="py-4">{{ number_format($travel->costo_total, 2) }}</td>
                            </tr>
                            <tr class="py-4">
                                <td class="py-4">Pagado</td>
                                <td class="py-4">-</td>
                            </tr>
                            <tr class="bg-gray-100 py-4">
                                <td class="py-4">Pendiente</td>
                                <td class="py-4">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-row justify-end items-center ">
                    <a href="" class="border px-8 py-2 rounded-full border-gray-500 hover:bg-red-rv hover:border-red-rv hover:text-white">Descargar Estado de Pagos</a>
                </div>
            </div>
        </div>
    </div>
</x-approxana-layout>