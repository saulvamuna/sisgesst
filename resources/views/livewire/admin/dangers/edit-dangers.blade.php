<div>
    <button wire:click="$set('openDanger', true)"
        class="absolute top-2 right-6 md:right-10 bg-blue-500 rounded-lg px-4">Editar</button>

    <x-dialog-modal wire:model="openDanger" maxWidth="5xl">
        <x-slot name="content">
            <div class="md:flex">
                <div class="bg-green-600 p-1 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                    Editar {{ $danger }}
                </div>
                @livewire('admin.dangers.create-dangers', ['danger' => $danger])
            </div>
            <div id="contentEval" class="w-full h-[64vh] md:h-[74vh] overflow-y-scroll px-6 md:pr-4">
                @foreach ($dangerDescription as $index => $name)
                    <div class="bg-gray-400 rounded-lg px-6 py-1 mt-6">
                        <div>
                            <x-input wire:model="dangerId.{{ $index }}" hidden/>
                            <x-label>Peligro</x-label>
                            <x-input wire:model="dangerDescription.{{ $index }}" />
                            <x-input-error for="dangerDescription.{{ $index }}" />
                        </div>
                        <div>
                            <div>
                                <button wire:click="confirmDeleteDanger('{{$index}}')"
                                    class="bg-red-600 text-gray-100 py-2 px-4 rounded-lg my-2">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                        @if ($openDeleteDanger)
                            <div class="fixed z-50 inset-0 flex items-center justify-center">
                                <div wire:click="$set('openDeleteDanger', true)"
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
                                            <x-secondary-button wire:click="$set('openDeleteDanger', false)"
                                                class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                Cancelar
                                            </x-secondary-button>
                                            <x-secondary-button wire:click="deleteConfirmeDanger"
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
                <button wire:click="$set('openDanger', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-lg text-gray-100">Cerrar</button>
                <button wire:click="saveDanger"
                    class="mt-10 py-2 px-6 bg-green-600 rounded-lg text-lg text-gray-100">Guardar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
