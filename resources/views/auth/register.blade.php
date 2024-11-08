<x-guest-layout>

    <div class="border-b border-gray-rv bg-white py-4 flex flex-row justify-center items-center">
        <img src="/images/logo-viajesroxana.png" class="w-72">
    </div>

    <div class=" max-w-screen-lg mx-auto py-10 w-4/6">
        <div class="bg-white border-t-4 border-red-rv rounded-lg shadow-2xl shadow-current px-12 py-8 max-sm:px-2 max-sm:mx-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nombres -->
                <div>
                    <x-input-label class="font-semibold" for="name" :value="__('Nombres del Alumno')" />
                    <x-text-input id="name" class="block mt-1 w-full focus:border-red-rv" type="text"
                        name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Apellidos -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="apellidos" :value="__('Apellidos del Alumno')" />
                    <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos"
                        :value="old('apellidos')" required autofocus autocomplete="apellidos" />
                    <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
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
                    <x-text-input id="documento" class="block mt-1 w-full" type="text" name="documento"
                        :value="old('documento')" required autofocus autocomplete="documento" />
                    <x-input-error :messages="$errors->get('documento')" class="mt-2" />
                </div>
                <!-- Telefono -->
                <!--<div class="mt-4">
                    <x-input-label class="font-semibold" for="telefono" :value="__('Telefono')" />
                    <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                        required autofocus autocomplete="telefono" />
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2"/>
                </div>-->
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="email" :value="__('Correo del Apoderado')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                </div>
                <!-- username -->
                <x-text-input id="username" type="hidden" name="username" :value="old('username')" />
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="password" :value="__('Contraseña')" />
                    <div class="relative">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 flex items-center pe-3 px-3 bg-gray-rv rounded-r-lg">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="size-5 text-white-rv dark:text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label class="font-semibold" for="password_confirmation" :value="__('Confirmar Contraseña')" />

                    <div class="relative">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <button type="button" id="togglePassword2"
                            class="absolute inset-y-0 right-0 flex items-center pe-3 px-3 bg-gray-rv rounded-r-lg">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor"
                                class="size-5 text-white-rv dark:text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="pt-6 pb-2">
                    <input type="checkbox" name="check-politica-proteccion" id="cpoli"
                    class="w-4 h-4 border-red-rv text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv focus:ring-2" required>
                    <label for="" class=" text-sm">He leído y acepto la <a href="https://viajesroxana.com/avisos-legales/politica-de-proteccion-de-datos/"
                             target="_blank" class="font-semibold">Política de Protección de Datos</a>
                        de Viajes Roxana y otorgo mi consentimiento explícito.<span
                            class="text-red-rv">(Obligatorio)</span></label>
                </div>
                <div class="py-2">
                    <input type="checkbox" name="check-terminos-condiciones" id="cterm"
                     class="w-4 h-4 border-red-rv text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv focus:ring-2" required>
                    <label for="" class=" text-sm">He leído y acepto los <a href="https://viajesroxana.com/avisos-legales/terminos-y-condiciones-intranet/"
                            class="font-semibold" target="_blank">Términos y Condiciones</a>,
                        <a href="https://viajesroxana.com/avisos-legales/politica-de-privacidad-y-seguridad/" class="font-semibold" target="_blank">Política de Privacidad</a> y <a href="https://viajesroxana.com/avisos-legales/derechos-y-resposabilidades-del-usuario/"
                            class=" font-semibold" target="_blank">Derechos
                            y Responsabilidades del Usuario.</a> <span class="text-red-rv">(Obligatorio)</span></label>
                </div>
                <div class="py-2">
                    <input type="checkbox" name="check-promociones" id="cprom" 
                    class="w-4 h-4 border-red-rv text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv focus:ring-2">
                    <label for="" class=" text-sm">Deseo recibir promociones y ofertas especiales. <span
                            class="text-red-rv">(Opcional)</span></label>
                </div>
                <div class="flex flex-row items-center justify-between mt-4 max-sm:flex-col-reverse">
                
                    <div class="flex flex-row gap-2 text-sm  max-sm:pt-4">
                        <p>¿Ya tienes cuenta? </p>
                        <a class="text-red-rv hover:underline" href="{{ route('login') }}">
                            {{ __('Ingresa aquí') }}
                        </a>
                    </div>
                    <x-primary-button class="ml-4">
                        {{ __('Registrarme') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>



    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const isPassword = passwordField.getAttribute('type') === 'password';
            passwordField.setAttribute('type', isPassword ? 'text' : 'password');

            // Toggle eye icon
            if (isPassword) {
                eyeIcon.innerHTML = `
            <path sstroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        `;
            } else {
                eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
            }
        });

        document.getElementById('togglePassword2').addEventListener('click', function() {
            const passwordField = document.getElementById('password_confirmation');
            const eyeIcon = document.getElementById('eyeIcon');
            const isPassword = passwordField.getAttribute('type') === 'password';
            passwordField.setAttribute('type', isPassword ? 'text' : 'password');

            // Toggle eye icon
            if (isPassword) {
                eyeIcon.innerHTML = `
            <path sstroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        `;
            } else {
                eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Obtener los elementos del formulario
            const nameField = document.getElementById('name');
            const surnameField = document.getElementById('apellidos');
            const documentField = document.getElementById('documento');
            const usernameField = document.getElementById('username');

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
