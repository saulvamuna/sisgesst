<div>
    <section>
        <article>
            <div class="flex flex-col justify-center">
                <hr
                    class="mt-3 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                <h1 class="text-2xl font-bold mb-6 m-auto">MEDIDAS DE INTERVENCIÓN</h1>
            </div>
            <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4 m-auto p-3">
                <div>
                    <h2 class="text-lg font-bold bg-gray-300 w-full pl-4 pr-2 pt-1 rounded-t-md flex justify-between">
                        Eliminacion
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                            fill="none" stroke="#d0021b" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </h2>
                    <select wire:model="removal"
                        class="bg-gray-100 mb-2 focus:bg-gray-100 border-2 border-gray-300 rounded-b-md w-full h-8 py-0 px-4 focus:ring-0 focus:border-green-600">
                        <option>-- Seleccione --</option>
                        @foreach ($removaled as $removal)
                            <option value="{{ $removal->id }}">{{ $removal->description }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="removal"/>
                    <x-measures-elimination wire:model="removalSuggestion" />
                    <x-input-error for="removalSuggestion"/>
                </div>

                <div>
                    <h2 class="text-lg font-bold bg-gray-300 w-full pl-4 pr-2 pt-1 rounded-t-md flex justify-between">
                        Sustitucion
                        <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                        </svg>
                    </h2>
                    <select wire:model="replacement"
                        class="bg-gray-100 mb-2 focus:bg-gray-100 border-2 border-gray-300 rounded-b-md w-full h-8 py-0 px-4 focus:ring-0 focus:border-green-600">
                        <option>-- Seleccione --</option>
                        @foreach ($replacements as $replacement)
                            <option value="{{ $replacement->id }}">{{ $replacement->description }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="replacement"/>
                    <x-measures-substitution wire:model="replacementSuggestion" />
                    <x-input-error for="replacementSuggestion"/>
                </div>
                <div>
                    <h2 class="text-lg font-bold bg-gray-300 w-full pl-4 pr-2 pt-1 rounded-t-md flex justify-between">
                        Control de ingenieria
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5">
                            <path fill="#C08261" d="M413.5 237.5c-28.2 4.8-58.2-3.6-80-25.4l-38.1-38.1C280.4 159 272 138.8 272 117.6V105.5L192.3 62c-5.3-2.9-8.6-8.6-8.3-14.7s3.9-11.5 9.5-14l47.2-21C259.1 4.2 279 0 299.2 0h18.1c36.7 0 72 14 98.7 39.1l44.6 42c24.2 22.8 33.2 55.7 26.6 86L503 183l8-8c9.4-9.4 24.6-9.4 33.9 0l24 24c9.4 9.4 9.4 24.6 0 33.9l-88 88c-9.4 9.4-24.6 9.4-33.9 0l-24-24c-9.4-9.4-9.4-24.6 0-33.9l8-8-17.5-17.5zM27.4 377.1L260.9 182.6c3.5 4.9 7.5 9.6 11.8 14l38.1 38.1c6 6 12.4 11.2 19.2 15.7L134.9 484.6c-14.5 17.4-36 27.4-58.6 27.4C34.1 512 0 477.8 0 435.7c0-22.6 10.1-44.1 27.4-58.6z"/>
                        </svg>
                    </h2>
                    <select wire:model="engineeringControl"
                        class="bg-gray-100 mb-2 focus:bg-gray-100 border-2 border-gray-300 rounded-b-md w-full h-8 py-0 px-4 focus:ring-0 focus:border-green-600">
                        <option>-- Seleccione --</option>
                        @foreach ($engineeringControls as $engineering)
                            <option value="{{ $engineering->id }}">{{ $engineering->description }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="engineeringControl"/>
                    <x-measures-engineering wire:model="engineeringControlSuggestion" />
                    <x-input-error for="engineeringControlSuggestion"/>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 gap-4 m-auto p-2">
                <div>
                    <h2 class="text-lg font-bold bg-gray-300 w-full pl-4 pr-2 pt-1 rounded-t-md flex justify-between">
                        Señalización, advertencias o controles administrativos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 576 512">
                            <path fill="#005eff" d="M0 48C0 21.5 21.5 0 48 0H336c26.5 0 48 21.5 48 48V207l-42.4 17H304 272c-8.8 0-16 7.2-16 16v32 24.2V304c0 .9 .1 1.7 .2 2.6c2.3 58.1 24.1 144.8 98.7 201.5c-5.8 2.5-12.2 3.9-18.9 3.9H240V432c0-26.5-21.5-48-48-48s-48 21.5-48 48v80H48c-26.5 0-48-21.5-48-48V48zM80 224c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H80zm80 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zM64 112v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zM176 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H176zm80 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H272c-8.8 0-16 7.2-16 16zM423.1 225.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z"/>
                        </svg>
                    </h2>
                    <select wire:model="administrativeControl"
                        class="bg-gray-100 mb-2 focus:bg-gray-100 border-2 border-gray-300 rounded-b-md w-full h-8 py-0 px-4 focus:ring-0 focus:border-green-600">
                        <option>-- Seleccione --</option>
                        @foreach ($administrativeControls as $administrative)
                            <option value="{{ $administrative->id }}">{{ $administrative->description }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="administrativeControl"/>
                    <x-measures-administrative wire:model="administrativeControlSuggestion" />
                    <x-input-error for="administrativeControlSuggestion"/>
                </div>
                <div>
                    <h2 class="text-lg font-bold bg-gray-300 w-full pl-4 pr-2 pt-1 rounded-t-md flex justify-between">
                        Equipo / elementos de protección personal
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <path fill="#FFC436" d="M256 32c-17.7 0-32 14.3-32 32v2.3 99.6c0 5.6-4.5 10.1-10.1 10.1c-3.6 0-7-1.9-8.8-5.1L157.1 87C83 123.5 32 199.8 32 288v64H544l0-66.4c-.9-87.2-51.7-162.4-125.1-198.6l-48 83.9c-1.8 3.2-5.2 5.1-8.8 5.1c-5.6 0-10.1-4.5-10.1-10.1V66.3 64c0-17.7-14.3-32-32-32H256zM16.6 384C7.4 384 0 391.4 0 400.6c0 4.7 2 9.2 5.8 11.9C27.5 428.4 111.8 480 288 480s260.5-51.6 282.2-67.5c3.8-2.8 5.8-7.2 5.8-11.9c0-9.2-7.4-16.6-16.6-16.6H16.6z"/>
                        </svg>
                    </h2>
                    <select wire:model="personalProtection"
                        class="bg-gray-100 mb-2 focus:bg-gray-100 border-2 border-gray-300 rounded-b-md w-full h-8 py-0 px-4 focus:ring-0 focus:border-green-600">
                        <option>-- Seleccione --</option>
                        @foreach ($personalProtections as $protection)
                            <option value="{{ $protection->id }}">{{ $protection->description }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="personalProtection"/>
                    <x-measures-protection wire:model="personalProtectionSuggestion" />
                    <x-input-error for="personalProtectionSuggestion"/>
                </div>
            </div>

        </article>
    </section>
</div>
