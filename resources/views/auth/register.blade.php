<x-guest-layout>

    <div class="border-b border-gray-rv bg-white py-4 flex flex-row justify-center items-center">
        <img src="/images/logo-viajesroxana.png" class="w-72">
    </div>

    <div class="max-w-screen-lg mx-auto w-full py-4">
        <p class=" text-red-rv text-2xl font-bold">Registro de cuenta</p>
    </div>

    <div class=" max-w-screen-lg mx-auto pb-10 pt-2 w-full mb-4 ">
        <div class="bg-white border-t-4 border-red-rv rounded-lg shadow-2xl shadow-current px-12 py-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nombres -->
                <div>
                    <x-input-label class="font-semibold" for="name" :value="__('Nombres del Alumno')" />
                    <x-text-input id="name" class="block mt-1 w-full focus:border-red-rv" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>
                <!-- Apellidos -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="apellidos" :value="__('Apellidos del Alumno')" />
                    <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')"
                        required autofocus autocomplete="apellidos"/>
                    <x-input-error :messages="$errors->get('apellidos')" class="mt-2"/>
                </div>
                <!-- Tipo de documento -->
                <div class="mt-4">
                    <label for="tipo_documento" class="block text-sm font-semibold leading-6 text-gray-900">Tipo
                        Documento</label>
                    <div class="mt-2.5">
                        <select id="tipo_documento" name="tipo_documento"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                            <option value="Seleccionar opción">Seleccionar opción</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="dni">Dni</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <!-- Documento -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="documento" :value="__('Documento del Alumno')" />
                    <x-text-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')"
                        required autofocus autocomplete="documento" />
                    <x-input-error :messages="$errors->get('documento')" class="mt-2"/>
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="email" :value="__('Correo del Apoderado')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                </div>
                <!-- username -->
                <x-text-input id="username" type="hidden" name="username" :value="old('username')"/>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="password" :value="__('Contraseña')"/>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="password_confirmation" :value="__('Confirmar Contraseña')"/>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>
                <div class="pt-6 pb-2">
                    <input type="checkbox" name="check-politica-proteccion" id="cpoli" class="red-rv border-red-rv rounded-md border-2 ring-red-rv">
                    <label for="" class=" text-sm">He leído y acepto la <a href="https://viajesroxana.com/avisos-legales/politica-de-proteccion-de-datos/" target="_blank" class="font-semibold hover:underline">Política de Protección de Datos</a>
                         de Viajes Roxana y otorgo mi consentimiento explícito.<span class="text-red-rv">(Obligatorio)</span></label>                     
                </div>
                <div class="py-2">
                    <input type="checkbox" name="check-terminos-condiciones" id="cterm" class="red-rv border-red-rv rounded-md border-2 ring-red-rv">
                    <label for="" class=" text-sm">He leído y acepto los <a href="https://viajesroxana.com/avisos-legales/terminos-y-condiciones-intranet/" class="font-semibold hover:underline" target="_blank">Términos y Condiciones</a>,
                         <a href="https://viajesroxana.com/avisos-legales/politica-de-privacidad-y-seguridad/" target="_blank" class="font-semibold hover:underline">Política de Privacidad</a> y <a href="https://viajesroxana.com/avisos-legales/derechos-y-resposabilidades-del-usuario/" target="_blank" class=" font-semibold hover:underline">Derechos
                         y Responsabilidades del Usuario.</a> <span class="text-red-rv">(Obligatorio)</span></label>                  
                </div>
                <div class="py-2">
                    <input type="checkbox" name="check-promociones" id="cprom" class="red-rv border-red-rv rounded-md border-2 ring-red-rv">
                    <label for="" class=" text-sm">Deseo recibir promociones y ofertas especiales. <span class="text-red-rv">(Opcional)</span></label>                     
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex flex-row gap-2">
                        <p class="text-sm">¿Ya tienes cuenta? </p>
                        <a class="text-sm text-red-rv hover:underline"
                        href="{{ route('login') }}">
                            {{ __('Ingresa aquí') }}
                        </a>
                    </div>                        
                    <div>
                        <x-primary-button class="ml-4">
                        {{ __('Registrarme') }}
                        </x-primary-button> 
                    </div>                    
                </div>
            </form>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener los elementos del formulario
            const form = document.querySelector('form');
            const checkPolitica = document.getElementById('cpoli');
            const checkTerminos = document.getElementById('cterm');
            

            form.addEventListener('submit', function(event) {
                let valid = true;
                let errorMessage = '';

                // Validar que los checkboxes obligatorios estén marcados
                if (!checkPolitica.checked) {
                    valid = false;
                    errorMessage += 'Debes aceptar la Política de Protección de Datos.<br>';
                }

                if (!checkTerminos.checked) {
                    valid = false;
                    errorMessage += 'Debes aceptar los Términos y Condiciones.<br>';
                }

                if (!valid) {
                    // Evitar el envío del formulario
                    event.preventDefault();
                    // Mostrar mensaje de error con SweetAlert
                    Swal.fire({
                        title: 'Error',
                        html: errorMessage, // Usa 'html' para permitir saltos de línea
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            });

            const nameField = document.getElementById('name');
            const surnameField = document.getElementById('apellidos');
            const documentField = document.getElementById('documento');
            const usernameField = document.getElementById('username');
            console.log("Generated Username:", usernameField.value);

            function generateUsername() {
                const name = nameField.value.substring(0, 2).toUpperCase();
                const surname = surnameField.value.substring(0, 2).toUpperCase();
                const documentNumber = documentField.value;
                const username = name + surname + documentNumber;

                usernameField.value = username;
            }

            // Generar el username cada vez que se cambien estos campos
            nameField.addEventListener('input', generateUsername);
            surnameField.addEventListener('input', generateUsername);
            documentField.addEventListener('input', generateUsername);

            // Generar el username al cargar la página
            generateUsername();
        });
    </script>
</x-guest-layout>
