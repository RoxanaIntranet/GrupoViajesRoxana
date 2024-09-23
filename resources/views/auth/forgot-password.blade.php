<x-guest-layout>    

    <div class="border-b border-gray-rv bg-white py-4 flex flex-row justify-center items-center">
        <img src="/images/logo-viajesroxana.png" class="w-72">
    </div>

    <div class=" max-w-screen-lg mx-auto mt-12">
        <div class="bg-white border-t-4 border-red-rv rounded-lg shadow-2xl shadow-current ">
            <div class="text-center pt-8 w-96 mx-auto">
                <p class="text-lg text-black font-semibold py-2">
                    ¿Tienes dificultades para acceder a tu cuenta?
                </p>
                <p class=" text-sm text-black py-2">
                     Introduce tu correo electrónico y te enviaremos un enlace para que restablezcas el acceso rápidamente.</p>
            </div>

            <div class="px-12 pb-6 pt-4">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Correo')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <div class="flex items-center justify-end mt-6">
                        <x-primary-button>
                            {{ __('Reestablecer Contraseña') }}
                        </x-primary-button>
                    </div>                    
                </form>
            </div>
            <div class="text-center w-96 mx-auto pb-6">
                <a href="https://api.whatsapp.com/send/?phone=51988868250" target="_blank" class="text-red-rv text-sm hover:underline hover:text-red-rv">¿Necesitas ayuda?</a>
            </div>
            <div class="text-center border-t border-gray-rv py-6">               
                <a href="https://grupoviajesroxana.com/" class="inline-block bg-gray-400 py-2 px-20 rounded-lg text-white hover:bg-red-rv">
                    <p>Volver al inicio de sesión</p>
                </a>
            </div>
            
        </div>
    </div>

</x-guest-layout>