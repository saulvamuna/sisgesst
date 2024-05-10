<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <div id="contentEval"
            class="relative px-4 py-2 lg:w-[85vw] lg:h-[93.1vh] w-[100vw] h-[100vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
            <div class="text-[#FFAD19] p-1 mt-6 mb-10 font-bold text-5xl rounded-lg w-7/12 mx-auto text-center">Medidas de intervención</div>
            <div class="w-11/12 mx-auto mt-6">
                <div class="relative flex md:block bg-gray-500 text-center rounded-t-md font-bold text-lg text-gray-100 py-2">
                    <div class="ml-2 md:ml-0 w-2/3 md:w-full">Eliminación</div>
                    @livewire('admin.intervention.edit-intervention', ['intervention' => 'Eliminacion'])
                </div>
                @foreach ($interventions as $intervention)
                    @if ($intervention->name === 'Eliminacion')
                        <div class="bg-gray-50 py-1 px-2 border-2 border-t-0 border-gray-400">
                            {{ $intervention->description }}
                        </div>
                    @endif
                @endforeach
            </div>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-2 md:ml-0 w-2/3 md:w-full">Controles de ingeniería</div>
                    @livewire('admin.intervention.edit-intervention', ['intervention' => 'Controles de ingenieria'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($interventions as $intervention)
                        @if ($intervention->name === 'Controles de ingenieria')
                            <div class="bg-gray-50 py-1 px-2 border-2 border-t-0 border-gray-400">
                                {{ $intervention->description }}
                            </div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-2 md:ml-0 w-2/3 md:w-full">Sustitución</div>
                    @livewire('admin.intervention.edit-intervention', ['intervention' => 'Sustitucion'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($interventions as $intervention)
                        @if ($intervention->name === 'Sustitucion')
                            <div class="bg-gray-50 py-1 px-2 border-2 border-t-0 border-gray-400">
                                {{ $intervention->description }}
                            </div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-2 md:ml-0 w-2/3 md:w-full">Equipo / elementos de protección personal</div>
                    @livewire('admin.intervention.edit-intervention', ['intervention' => 'Equipo / elementos de protección personal'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($interventions as $intervention)
                        @if ($intervention->name === 'Equipo / elementos de protección personal')
                            <div class="bg-gray-50 py-1 px-2 border-2 border-t-0 border-gray-400">
                                {{ $intervention->description }}
                            </div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-2 md:ml-0 w-2/3 md:w-full">Controles administrativos, señalización, advertencia</div>
                    @livewire('admin.intervention.edit-intervention', ['intervention' => 'Controles administrativos, señalización, advertencia'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($interventions as $intervention)
                        @if ($intervention->name === 'Controles administrativos, señalización, advertencia')
                            <div class="bg-gray-50 py-1 px-2 border-2 border-t-0 border-gray-400">
                                {{ $intervention->description }}
                            </div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>
        </div>
    </main>
</div>
