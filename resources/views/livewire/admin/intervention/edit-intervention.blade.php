<div>
    <button wire:click="$set('openIntervention', true)"
        class="absolute top-2 right-3 md:right-10 bg-blue-500 rounded-lg px-4">Editar</button>

    <x-dialog-modal wire:model="openIntervention" maxWidth="5xl">
        <x-slot name="content">
            <div class="md:flex">
                <div class="bg-green-600 p-1 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                    Editar Medida de intervención: {{ $intervention }}
                </div>
                @livewire('admin.intervention.create-intervention', ['intervention' => $intervention])
            </div>

            <div id="contentEval" class="w-full h-[56vh] md:h-[74vh] overflow-y-scroll px-6 md:pr-4">
                <div class="md:grid grid-cols-2 gap-4">
                    @foreach ($interventionDescription as $index => $name)
                        <div class="bg-gray-400 py-1 px-4 rounded-lg mt-6">
                            <x-input wire:model="interventionId.{{ $index }}" hidden/>
                            <x-label>Intervención</x-label>
                            <textarea wire:model="interventionDescription.{{ $index }}"
                                class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-24"></textarea>
                            <x-input-error for="interventionDescription.{{ $index }}" />

                            <div>
                                <div>
                                    <button wire:click="confirmDeleteIntervention('{{ $index }}')"
                                        class="bg-red-600 text-gray-100 py-2 px-4 rounded-lg my-2">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                            @if ($openDeleteIntervention)
                                <div class="fixed z-50 inset-0 flex items-center justify-center">
                                    <div wire:click="$set('openDeleteIntervention', true)"
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
                                                <x-secondary-button wire:click="$set('openDeleteIntervention', false)"
                                                    class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                    Cancelar
                                                </x-secondary-button>
                                                <x-secondary-button wire:click="deleteConfirmeIntervention"
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
            </div>

            <div class="flex justify-between px-6">
                <button wire:click="$set('openIntervention', false)"
                    class="mt-10 py-2 px-6 bg-gray-500 rounded-lg text-lg text-gray-100">Cerrar</button>
                <button wire:click="saveIntervention"
                    class="mt-10 py-2 px-6 bg-green-600 rounded-lg text-lg text-gray-100">Guardar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
