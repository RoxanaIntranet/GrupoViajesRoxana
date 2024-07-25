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
                                'Para asegurar que tus preferencias y restricciones alimentarias se tengan en cuenta durante tu viaje, por favor completa los siguientes campos con la información requerida.',
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                    <img src="/images/health.png" alt="" class="pb-0 w-64">
                </div>
            </div>
        </div>
    </div>


    <!--- div formulario --->

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="#" method="POST">

                <!-- MIS DATOS PERSONALES -->
                <x-texthead>
                    {{ __('Mi Ficha Nutricional') }}
                </x-texthead>
                <div class="grid grid-cols-1 gap-4 p-6  bg-white border border-gray-200 rounded-lg shadow">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="last-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Peso</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Talla</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Actividad
                                Física</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="1 vez a la semana">1 vez a la semana</option>
                                    <option value="2 o 3 veces a la semana">2 o 3 veces a la semana</option>
                                    <option value="Todos los dias">Todos los dias</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--- PRIMERA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="tiposAlimentacion" class="block text-sm font-semibold leading-6 text-gray-900">Tipos de
                                Alimentacion</label>
                            <div class="mt-2.5">
                                <select id="tiposAlimentacion"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm
                                     ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
                                      focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Vegetariano">Vegetariano</option>
                                    <option value="Vegano">Vegano</option>
                                    <option value="Omnívoboro">Omnívoboro</option>
                                    <option value="Macrobiotico">Macrobiotico</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="edtiposAlimentacion"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="edtiposAlimentacion" id="edtiposAlimentacion" disabled placeholder="Ejemplo: Omnívoro con preferencia por pescado y pollo."
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6
                                      disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <!--- SEGUNDA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="alergiasAlimentarias" class="block text-sm font-semibold leading-6 text-gray-900">Alergias Alimentarias</label>
                            <div class="mt-2.5">
                                <select id="alergiasAlimentarias"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Mariscos">Mariscos</option>
                                    <option value="Pescados">Pescados</option>
                                    <option value="Verduras">Verduras</option>
                                    <option value="Citricos">Citricos</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="edalergiasAlimentarias"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="edalergiasAlimentarias" id="edalergiasAlimentarias" disabled placeholder="Ejemplo: Dificutad para respirar por ingesta de mariscos."
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6 disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <!--- TERCERA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="noConsume" class="block text-sm font-semibold leading-6 text-gray-900">¿ Que tipos de Alimentos no consumes ?</label>
                            <div class="mt-2.5">
                                <select id="noConsume"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Leche">Leche</option>
                                    <option value="Mariscos">Mariscos</option>
                                    <option value="Huevo">Huevo</option>
                                    <option value="Queso">Queso</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="ednoConsume"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="ednoConsume" id="ednoConsume" disabled placeholder="Ejemplos: Gluten"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6 disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--- CUARTA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="habitosAlimentarios" class="block text-sm font-semibold leading-6 text-gray-900">Habitos Alimentarios</label>
                            <div class="mt-2.5">
                                <select id="habitosAlimentarios"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Comer 1 solo plato">Comer 1 solo plato</option>
                                    <option value="Comer solo postre">Comer solo postre</option>
                                    <option value="Comer despacio">Comer despacio</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="edhabitosAlimentarios"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="edhabitosAlimentarios" id="edhabitosAlimentarios" disabled placeholder="Ejemplo: Come 3 veces al dia."
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6 disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                    <hr>
                    
                    <!--- QUINTA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="preferenciaComida" class="block text-sm font-semibold leading-6 text-gray-900">Preferencias de Comidas</label>
                            <div class="mt-2.5">
                                <select id="preferenciaComida"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Marina">Marina</option>
                                    <option value="Criollo">Criollo</option>
                                    <option value="Mediterraneo">Mediterraneo</option>
                                    <option value="Frituras">Frituras</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="edpreferenciaComida"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="edpreferenciaComida" id="edpreferenciaComida" disabled placeholder="Ejemplo: Frituras"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6 disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--- SEXTA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="siguesDieta" class="block text-sm font-semibold leading-6 text-gray-900">¿Sigues algun tipo de Dieta?</label>
                            <div class="mt-2.5">
                                <select id="siguesDieta"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-span-2">
                            <label for="edsiguesDieta"
                                class="block text-sm font-semibold leading-6 text-gray-900">Especificar
                                Detalles</label>
                            <div class="mt-2.5">
                                <input type="text" name="edsiguesDieta" id="edsiguesDieta" disabled placeholder="Ejemplo: Como ensaladas"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-white
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6 disabled:bg-slate-300">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- BOTONES GUARDAR -->

                <div class="my-10 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                    <div class="text-start">
                        <a href="{{ URL::previous() }}">Volver</a>
                    </div>
                    <div>
                        <button type="submit"
                            class="block w-full rounded-md bg-red-rv px-3.5 py-2.5 
                        text-center text-sm font-semibold text-white shadow-sm 
                        hover:bg-red-rv focus-visible:outline 
                        focus-visible:outline-2 focus-visible:outline-offset-2
                         focus-visible:outline--red-rv">
                            GUARDAR CAMBIOS
                        </button>
                    </div>
                    <div class="text-end">
                        <a href="#">Siguiente</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Seleccionamos el select y el input
        const tiposAlimentacion = document.getElementById('tiposAlimentacion');
        const edtiposAlimentacion = document.getElementById('edtiposAlimentacion');
        const alergiasAlimentarias = document.getElementById('alergiasAlimentarias');
        const edalergiasAlimentarias = document.getElementById('edalergiasAlimentarias');
        const noConsume = document.getElementById('noConsume');
        const ednoConsume = document.getElementById('ednoConsume');
        const habitosAlimentarios = document.getElementById('habitosAlimentarios');
        const edhabitosAlimentarios = document.getElementById('edhabitosAlimentarios');
        const preferenciaComida = document.getElementById('preferenciaComida');
        const edpreferenciaComida = document.getElementById('edpreferenciaComida');
        const siguesDieta = document.getElementById('siguesDieta');
        const edsiguesDieta = document.getElementById('edsiguesDieta');

        // Función para habilitar o deshabilitar el input
        function toggleInput1() {
            if (tiposAlimentacion.value === 'Otro') {
                edtiposAlimentacion.disabled = false;
                edtiposAlimentacion.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                edtiposAlimentacion.disabled = true;
                edtiposAlimentacion.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }

        function toggleInput2() {
            if (alergiasAlimentarias.value === 'Otro') {
                edalergiasAlimentarias.disabled = false;
                edalergiasAlimentarias.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                edalergiasAlimentarias.disabled = true;
                edalergiasAlimentarias.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }
        
        function toggleInput3() {
            if (noConsume.value === 'Otro') {
                ednoConsume.disabled = false;
                ednoConsume.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                ednoConsume.disabled = true;
                ednoConsume.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }
        function toggleInput4() {
            if (habitosAlimentarios.value === 'Otro') {
                edhabitosAlimentarios.disabled = false;
                edhabitosAlimentarios.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                edhabitosAlimentarios.disabled = true;
                edhabitosAlimentarios.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }

        function toggleInput5() {
            if (preferenciaComida.value === 'Otro') {
                edpreferenciaComida.disabled = false;
                edpreferenciaComida.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                edpreferenciaComida.disabled = true;
                edpreferenciaComida.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }

        function toggleInput6() {
            if (siguesDieta.value === 'Si') {
                edsiguesDieta.disabled = false;
                edsiguesDieta.focus(); // Opcional: enfocar el input cuando se habilite
            } else {
                edsiguesDieta.disabled = true;
                edsiguesDieta.value = ''; // Opcional: limpiar el input cuando se deshabilite
            }
        }

        // Evento cuando cambia la opción seleccionada del select
        tiposAlimentacion.addEventListener('change', toggleInput1);
        alergiasAlimentarias.addEventListener('change', toggleInput2);
        noConsume.addEventListener('change', toggleInput3);
        habitosAlimentarios.addEventListener('change', toggleInput4);
        preferenciaComida.addEventListener('change', toggleInput5);
        siguesDieta.addEventListener('change', toggleInput6);
    </script>

</x-approxana-layout>
