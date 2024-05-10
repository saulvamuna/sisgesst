<x-guest-layout>

    <x-navbar-index/>

        <main>
            <div class="flex my-6 w-full">
                <div class="flex-col sm:p-10 2xl:px-32">
                    {{--------------------------- SECTION ABOUT THE SYSTEM ----------------------------}}
                    <x-about-system />

                    {{--------------------------- SECTION USE GUIDE----------------------------}}
                    <x-use-guide />

                    {{--------------------------- SECTION RESOLUTION----------------------------}}
                    <x-resolution />
                </div>

                {{--------------------- ASIDE -------------------------}}
                <x-aside />
            </div>
        </main>

        <footer>
            <x-footer-home/>
        </footer>

</x-guest-layout>

        {{-------------------------------- NAVEGATION BAR ---------------------------------}}

