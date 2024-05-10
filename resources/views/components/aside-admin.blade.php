<aside class="2xl:w-[15vw] border-r hidden lg:block">
    {{-- CARD ADMIN --}}
    <div class="relative  group overflow-hidden h-44 p-5 flex flex-col items-start">
        <div class="flex items-center text-center h-full">
          <span class="font-bold text-xl">ADMINISTRADOR</span>
        </div>
        <svg class="group-hover:scale-110 duration-500 absolute -bottom-0.5 -right-16 w-40 h-40 z-10 -my-2  fill-gray-50 stroke-[#db9616]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path data-name="layer1" d="M 50.4 51 C 40.5 49.1 40 46 40 44 v -1.2 a 18.9 18.9 0 0 0 5.7 -8.8 h 0.1 c 3 0 3.8 -6.3 3.8 -7.3 s 0.1 -4.7 -3 -4.7 C 53 4 30 0 22.3 6 c -5.4 0 -5.9 8 -3.9 16 c -3.1 0 -3 3.8 -3 4.7 s 0.7 7.3 3.8 7.3 c 1 3.6 2.3 6.9 4.7 9 v 1.2 c 0 2 0.5 5 -9.5 6.8 S 2 62 2 62 h 60 a 14.6 14.6 0 0 0 -11.6 -11 z" stroke-miterlimit="10" stroke-width="5"></path></svg>
        <svg class="group-hover:scale-110 duration-200 absolute -bottom-0.5 -right-16 w-40 h-40 z-10 -my-2  fill-gray-50 stroke-[#FFAD19]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path data-name="layer1" d="M 50.4 51 C 40.5 49.1 40 46 40 44 v -1.2 a 18.9 18.9 0 0 0 5.7 -8.8 h 0.1 c 3 0 3.8 -6.3 3.8 -7.3 s 0.1 -4.7 -3 -4.7 C 53 4 30 0 22.3 6 c -5.4 0 -5.9 8 -3.9 16 c -3.1 0 -3 3.8 -3 4.7 s 0.7 7.3 3.8 7.3 c 1 3.6 2.3 6.9 4.7 9 v 1.2 c 0 2 0.5 5 -9.5 6.8 S 2 62 2 62 h 60 a 14.6 14.6 0 0 0 -11.6 -11 z" stroke-miterlimit="10" stroke-width="2"></path></svg>
    </div>

    {{-- NAV --}}

    <div class="px-3 h-[74vh] py-4 overflow-y-auto">

        <ul class="space-y-2 font-medium">
            <div class="flex justify-center items-center text-gray-300 text-sm">
                <h1 class="mr-4">Usuarios</h1>
                <hr class="w-full items-center">
            </div>
            <li>
                <a href="{{ route('rol') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('rol') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-square-plus group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Crear roles y permisos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('registerperson') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('registerperson') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-arrow-right-to-bracket group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Registrar</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('user.index') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-users group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Usuarios</span>
                </a>
            </li>
            <div class="flex justify-center items-center text-gray-300 text-sm">
                <h1 class="mr-4 w-48">Accesos rápidos</h1>
                <hr class="w-full items-center">
            </div>
            <li>
                <a href="{{ route('evaluators') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('evaluators') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-regular fa-id-card group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Evaluadores</span>
                </a>
            </li>
            <li>
                <a href="{{ route('administrators') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('administrators') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-user-tie group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Administradores</span>
                </a>
            </li>
            <li>
                <a href="{{ route('managers') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('managers') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-clipboard-list group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Gestores de empresas</span>
                </a>
            </li>
            <hr class="w-full items-center">
            <li>
                <a href="{{ route('parameter') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('parameter') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-list-check group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Criterios</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dangers') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('dangers') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-triangle-exclamation group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Peligros</span>
                </a>
            </li>
            <li>
                <a href="{{ route('intervention') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('intervention') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-scale-balanced group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Medidas de intervención</span>
                </a>
            </li>
            <li>
                <a href="{{ route('deactivated') }}" class="flex items-center p-2 rounded-lg group {{ request()->routeIs('deactivated') ? 'text-white bg-black bg-opacity-50 hover:bg-black hover:bg-opacity-50' : 'bg-opacity-50 hover:bg-black hover:bg-opacity-40' }}">
                    <i class="fa-solid fa-building-circle-xmark group-hover:text-white"></i>
                    <span class="group-hover:text-white ml-3">Empresas desactivadas</span>
                </a>
            </li>
        </ul>
        <div class="absolute bottom-0 2xl:w-64 lg:w-56 flex justify-end p-5 text-xl">

            <a href="{{ route('admin') }}" class="px-2 text-gray-900 rounded-lg group hover:bg-black hover:bg-opacity-50 duration-300">
                <i class="fa-solid fa-house group-hover:text-white duration-300"></i>

            </a>
        </div>
    </div>
</aside>
