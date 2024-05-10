<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />
        <div id="contentEval"
            class="relative px-4 py-2 lg:w-[85vw] lg:h-[93.1vh] w-[100vw] h-[100vh] overflow-y-scroll overflow-x-hidden bg-gray-200 ">
            <div class="text-[#FFAD19] p-1 mt-6 mb-10 font-bold text-5xl rounded-lg w-7/12 mx-auto text-center">Peligros</div>
            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Biológico</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Biológico'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Biológico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Físico</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Físico'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Físico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Químicos</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Químico'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Químico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Físico - Químico</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Físico-Químico'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Físico-Químico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Biomecánicos</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Biomecánico'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Biomecánico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Mecánico</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Mecánico'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Mecánico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Eléctrico</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Eléctrico'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Eléctrico')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Locativo</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Locativo'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Locativo')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Psicosocial</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Psicosocial'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Psicosocial')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Público</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Público'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Público')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>

            <x-danger-table>
                <x-slot name="titleOne">
                    <div class="ml-4 md:mr-0">Saneamiento</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Saneamiento'])
                </x-slot>
                <x-slot name="contentOne">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Saneamiento')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
                <x-slot name="titleTwo">
                    <div class="ml-4 md:mr-0">Fenómenos Naturales</div>
                    @livewire('admin.dangers.edit-dangers', ['danger' => 'Fenómenos naturales'])
                </x-slot>
                <x-slot name="contentTwo">
                    @foreach ($dangerDescriptions as $danger)
                        @if ($danger->danger === 'Fenómenos naturales')
                            <div class="bg-gray-50 px-2 border-2 border-t-0 border-gray-400">
                                {{ $danger->danger_description }}</div>
                        @endif
                    @endforeach
                </x-slot>
            </x-danger-table>
        </div>
    </main>
</div>
