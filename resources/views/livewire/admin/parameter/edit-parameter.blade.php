<div>
    <button wire:click="$set('openParameter', true)"
        class="absolute top-2 right-4 md:right-10 bg-blue-500 rounded-lg px-4">Editar</button>
    <x-dialog-modal wire:model="openParameter" maxWidth="5xl">
        <x-slot name="content">
            <div class="md:flex">
                <div class="bg-green-600 p-1 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                    Editar {{ $parameter }}
                </div>
                @livewire('admin.parameter.create-parameter', ['parameter' => $parameter])
            </div>
            <div id="contentEval" class="w-full h-[70vh] md:h-[74vh] overflow-y-scroll px-6 md:pr-4">
                @foreach ($this->parameterName as $index => $name)
                    <div class="py-1 bg-gray-400 mt-6 px-4 rounded-lg">
                        <div class="md:grid grid-cols-12 gap-6 items-center">
                            <div class="col-span-2">
                                <x-input type="text" wire:model="parameterId.{{ $index }}" hidden />
                                <x-label>Nombre</x-label>
                                <x-input type="text" wire:model="parameterName.{{ $index }}" />
                                <x-input-error for="parameterName.{{ $index }}" />
                            </div>
                            @if ($parameter != 'risk' && $parameter != 'acceptability')
                                <div class="col-span-2">
                                    <x-label>Prefijo</x-label>
                                    <x-input type="text" wire:model="parameterPrefix.{{ $index }}" />
                                    <x-input-error for="parameterPrefix.{{ $index }}" />
                                </div>
                            @endif
                            @if ($parameter != 'acceptability')
                                <div class="col-span-2">
                                    <x-label>Valor</x-label>
                                    <x-input type="text" wire:model="parameterValue.{{ $index }}" />
                                    <x-input-error for="parameterValue.{{ $index }}" />
                                </div>
                            @endif
                            <div class="col-span-6">
                                <x-label>Significado</x-label>
                                <textarea wire:model="parameterMeaning.{{ $index }}"
                                    class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-28"></textarea>
                                <x-input-error for="parameterMeaning.{{ $index }}" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <button wire:click="confirmDelete('{{$index}}')"
                                    class="bg-red-600 text-gray-100 py-2 px-4 rounded-lg my-2">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                        @if ($openDeleteParameter)
                            <div class="fixed z-50 inset-0 flex items-center justify-center">
                                <div wire:click="$set('openDeleteParameter', true)"
                                    class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay">
                                </div>
                                <div
                                    class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                                    <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                                        <h3 class="w-full text-2xl text-center text-gray-100">
                                            Eliminar
                                        </h3>
                                    </div>
                                    <div class="px-6 py-4 text-left modal-content">
                                        <p class="text-xl text-gray-500">
                                            ¿Estás seguro de que deseas eliminar este proceso?
                                        </p>
                                        <div class="mt-4 text-center">
                                            <x-secondary-button wire:click="$set('openDeleteParameter', false)"
                                                class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                Cancelar
                                            </x-secondary-button>
                                            <x-secondary-button wire:click="deleteConfirmeParameter"
                                                class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                                                Eliminar
                                            </x-secondary-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="flex justify-between px-10">
                <button wire:click="$set('openParameter', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-md text-gray-100">Cerrar</button>
                <button wire:click="saveParameter"
                    class="mt-10 py-2 px-6 bg-blue-600 rounded-lg text-md text-gray-100">Guardar cambios</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
