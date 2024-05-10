<x-guest-layout>
 {{-------------------------------- NAVEGATION BAR ---------------------------------}}
        <x-navbar-index/>

        <main class="flex h-[91.7vh]">
            {{-------------------------------- SECTION IMAGE ---------------------------------}}
            <form class="sm:w-3/4 w-full flex flex-col h-full" method="POST" action="{{ route('contact.store') }}">
                @csrf {{-- Agrega el token CSRF --}}
                <div class="lg:w-1/2 p-4 md:m-auto md:rounded-lg bg-white md:shadow-lg md:border border-black border-opacity-5 ">
                    <h1 class="text-center font-bold text-4xl m-4 mb-7">Contáctenos</h1>

                    {{-- Mensaje de éxito o error --}}
                    @if(session('success'))
                        <div class="text-green-500 text-center">
                            {{ session('success') }}
                        </div>
                    @elseif($errors->any())
                        <div>
                            <ul class="grid grid-cols-2">
                                @foreach($errors->all() as $error)
                                    <li class="text-red-500 mx-4">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="sm:flex">
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label for="name">Nombre completo</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                        <div class="flex flex-col m-4 sm:w-1/2">
                            <label for="email">Correo</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col m-4">
                            <label for="affair">Asunto</label>
                            <input type="text" name="affair" value="{{ old('affair') }}" class="border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">
                        </div>
                        <div class="flex flex-col m-4">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="h-44 resize-none border-gray-300 rounded-md focus:ring-1 focus:ring-green-600 focus:border-green-600 bg-[#EEEFF1] focus:bg-white">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="bg-green-600 rounded-lg  p-2 text-white m-4 w-1/4">Enviar</button>
                    </div>
                </div>
            </form>

            <div class="p-4 m-auto h-full w-1/4 sm:flex flex-col bg-[#EEEFF1] justify-between hidden">
                <div>
                    <div class="h-16 w-32 flex justify-between items-center">
                        <a href="https://web.facebook.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-facebook fa-xl text-gray-600 bg-opacity-70 hover:text-blue-800"></i></a>
                        <a href="https://co.linkedin.com" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-linkedin fa-xl text-gray-600 hover:text-cyan-600"></i></a>
                        <a href="https://twitter.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-x-twitter fa-xl text-gray-600 hover:text-black"></i></a>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-[#FFAD19]">SISGESST</h1>
                        <p class="h-16 text-lg">Proteger la vida y el bienestar de los trabajadores es cultura de nuestra organización/p>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold text-[#FFAD19]">COMPAÑÍA</h1>
                    <div class="flex flex-col h-16">
                        <a href="{{ route('help') }}" class="hover:text-[#FFAD19] text-lg">Acerca de nosotros</a>
                        <a href="#" class="hover:text-[#FFAD19] text-lg">Contáctanos</a>
                    </div>
                </div>
                <div>
                    <h2 class="font-semibold text-[#FFAD19]">CONTACTO DIRECTO</h2>
                    <div class="flex flex-col h-16">
                        <P class="text-lg">Correo: support@gmail.com</P>
                        <p class="text-lg">314 4334726</p>
                    </div>
                </div>
            </div>

        </main>
        <div class="sm:hidden block">
            <x-footer-home/>
        </div>

</x-guest-layout>

