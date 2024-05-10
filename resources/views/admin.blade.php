<x-app-layout>
    <div class="flex flex-col">
        <main class="flex-grow flex">
            <x-aside-admin />

            <x-content-admin>
                <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 my-8">
                    <a href="{{ route('registerperson') }}" class="2xl:w-[348px] 2xl:h-52 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-arrow-right-to-bracket fa-xl"></i>
                            <h1 class="font-semibold pt-10">Registrar</h1>
                        </div>
                    </a>
                    <a href="{{ route('evaluators') }}" class="2xl:w-[348px] 2xl:h-52 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0  rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-regular fa-id-card fa-xl"></i>
                            <h1 class="font-semibold pt-10">Evaluadores</h1>
                        </div>
                    </a>
                    <a href="{{ route('administrators') }}" class="2xl:w-[348px] 2xl:h-52 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0  rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">

                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-user-tie fa-xl"></i>
                            <h1 class="font-semibold pt-10">Administradores</h1>
                        </div>
                    </a>

                    <a href="{{ route('managers') }}" class="2xl:w-[348px] 2xl:h-52 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0  rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">

                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-clipboard-list fa-xl mt-7"></i>
                            <h1 class="font-semibold pt-10">Gestores de empresas</h1>
                        </div>
                    </a>
                </div>

                <div class="grid 2xl:grid-cols-3 xl:grid-cols-2">
                    <a href="{{ route('parameter') }}" class="w-11/12 h-96 my-2 2xl:my-0 rounded-lg shadow-lg mx-auto cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Criterios</h1>
                                <i class="fa-solid fa-list-check text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50">
                                <img src="{{ asset('img/criterios.png') }}" alt="" class="h-full">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('dangers') }}" class="w-11/12 h-96 my-2 2xl:my-0 rounded-lg shadow-lg mx-auto cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Peligros</h1>
                                <i class="fa-solid fa-triangle-exclamation text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50">
                                <img src="{{ asset('img/peligros.png') }}" alt="" class="h-full">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('intervention') }}" class="w-11/12 h-96 my-2 2xl:my-0 rounded-lg shadow-lg mx-auto cursor-pointer text-xl">
                        <div class="w-full h-full  bg-white border-2 border-gray-500 overflow-hidden rounded-lg flex flex-col">
                            <div class="flex p-2 items-center justify-between border-b-2 border-gray-500">
                                <h1 class="font-semibold ">Medidas de intervención</h1>
                                <i class="fa-solid fa-scale-balanced text-2xl"></i>
                            </div>
                            <div class="h-full bg-gray-50">
                                <img src="{{ asset('img/medidas.png') }}" alt="" class="h-full">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid 2xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-1 my-8">
                    <a href="{{ route('rol') }}" class="2xl:w-11/12 2xl:h-36 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0 rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-square-plus fa-xl"></i>
                            <h1 class="font-semibold pt-10">Crear roles con sus permisos</h1>
                        </div>
                    </a>
                    <a href="{{ route('deactivated') }}" class="2xl:w-11/12 2xl:h-36 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0  rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-building  fa-xl mt-4"></i>
                            <h1 class="font-semibold pt-10">Empresas desactivadas</h1>
                        </div>
                    </a>
                    <a href="{{ route('user.index') }}" class="2xl:w-11/12 2xl:h-36 lg:w-[330px] lg:h-52 md:w-[300px] md:h-52 w-[300px] h-52 my-2 2xl:my-0  rounded-lg shadow-lg mx-auto bg-gray-700 cursor-pointer text-3xl">
                        <div class="w-full h-full p-6 bg-white border-2 border-gray-500 hover:rotate-3 origin-bottom-right duration-500 rounded-lg flex flex-col text-center justify-center">
                            <i class="fa-solid fa-users fa-xl mt-7"></i>
                            <h1 class="font-semibold pt-10">Usuarios</h1>
                        </div>
                    </a>
                </div>

            </x-content-admin>
        </main>
    </div>
</x-app-layout>


