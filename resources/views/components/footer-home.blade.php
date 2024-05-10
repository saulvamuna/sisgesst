<div class="sm:flex justify-around px-1 sm:px-4 lg:px-28 bg-[#EEEFF1] text-center text-black py-2 h-full">
    <div class="lg:flex items-center">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16 mx-auto">
        <p class="text-[#FFAD19] px-3 text-3xl font-extrabold">SISGESST</p>
    </div>
    <div>
        <h1 class="font-semibold text-xl m-2">LEGAL</h1>
        <div class="flex flex-col justify-center h-16 items-center">
            <a href="#" class="hover:text-[#FFAD19] text-lg">Términos</a>
            <a href="#" class="hover:text-[#FFAD19] text-lg">Privacidad</a>
        </div>
    </div>
    <div>
        <h1 class="font-semibold text-xl m-2">COMPAÑÍA</h1>
        <div class="flex flex-col justify-center h-16 items-center">
            <a href="{{ route('help') }}" class="hover:text-[#FFAD19] text-lg">Acerca de nosotros</a>
            <a href="{{ route('contact.index') }}" class="hover:text-[#FFAD19] text-lg">Contáctanos</a>
        </div>
    </div>
    <div>
        <h1 class="font-semibold text-xl m-2">REDES SOCIALES</h1>
        <div class="h-16 m-auto w-32 flex justify-between items-center">
            <a href="https://web.facebook.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-facebook fa-xl hover:text-blue-800"></i></a>
            <a href="https://co.linkedin.com" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-linkedin fa-xl hover:text-cyan-600"></i></a>
            <a href="https://twitter.com/" class="hover:bg-white rounded-sm h-5 w-5 hover:p-1 ease-in-out duration-500"><i class="fa-brands fa-square-x-twitter fa-xl hover:text-black"></i></a>
        </div>
    </div>
</div>
