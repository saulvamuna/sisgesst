<div class="z-10 flex justify-between w-full items-center h-20 px-4 py-2 sticky top-0 navbar border-none">
    <div class="flex">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16">
        <p class="my-4 text-[#FFAD19] px-3 text-3xl font-extrabold">SISGESST</p>
    </div>
    <div class="text-center font-semibold w-full hidden lg:block ">
        <a href="/" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Inicio</a>
        <a href="{{ route('help') }}" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Ayuda</a>
        <a href="{{ route('contact.index') }}" class="px-10 py-[31px] focus:underline focus:underline-2 focus:rounded-sm active:outline-green-200">Contáctenos</a>
    </div>
    <div>
        <div class="hidden lg:block">
            @if (Route::has('login'))
                <div class="sm:sticky sm:top-0 sm:right-0 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">Evaluar</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">Iniciar</a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold focus:underline focus:underline-2 focus:rounded-sm active:outline-green-100 px-4 py-[31px]">REGISTRARSE</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
        </div>
        <div class="relative lg:hidden">
            <!-- Botón del menú hamburguesa -->
            <button id="hamburger-button" class="text-gray-600 text-3xl hover:text-gray-800 focus:outline-none focus:text-gray-800">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Menú desplegable -->
            <div class="absolute right-0 hidden bg-white border border-gray-300 shadow-lg" id="menu">
                <ul>
                    <li>
                        <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Inicio</a>
                    </li>
                    <li>
                         <a href="{{ route('help') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Ayuda</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Contáctenos</a>
                    </li>
                    <hr>
                    <li>
                        @if (Route::has('login'))
                            <div class="sm:sticky sm:top-0 sm:right-0">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Evaluar</a>
                                @else
                                    <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Iniciar</a>
                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 block px-4 py-2 text-gray-800 hover:bg-gray-200">REGISTRARSE</a>
                                    @endif --}}
                                @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
        // Obtén la barra de navegación
        const navbar = document.querySelector('.navbar');

        // Función para manejar el scroll
        function handleScroll() {
          if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
          } else {
            navbar.classList.remove('scrolled');
          }
        }

        // Escucha el evento de scroll
        window.addEventListener('scroll', handleScroll);


        // Obtén el botón de hamburguesa y el menú desplegable por sus IDs o clases
        const hamburgerButton = document.getElementById('hamburger-button');
        const menu = document.getElementById('menu');

        // Agrega un evento click al botón de hamburguesa
        hamburgerButton.addEventListener('click', () => {
            // Alternar la clase 'hidden' en el menú desplegable para mostrar u ocultar el menú
            menu.classList.toggle('hidden');
        });
</script>
