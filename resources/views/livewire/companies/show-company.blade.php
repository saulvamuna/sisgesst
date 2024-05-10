<div>
    <x-navbar-company :company="$company" />
    @livewire('processes.show-process', ['companyId' => $company->id])

    @if ($openDeactive)
        <div class="fixed z-50 inset-0 flex items-center justify-center">
            <div wire:click="$set('openDeactive', true)" class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay">
            </div>

            <div
                class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                <!-- Content of the modal -->
                <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                    <h3 class="w-full text-2xl text-center text-gray-100 ">Desactivar empresa
                    </h3>
                </div>
                <div class="px-6 py-4 text-left modal-content">

                    <p class="text-lg text-gray-500 mb-3">
                        Por favor ingrese el nit de la empresa para desactivarla
                    </p>
                    <x-input type="text" wire:model="nitDeactive"/>
                    <x-input-error for="nitDeactive"/>
                    <div class="mt-4 text-center">
                        <x-secondary-button wire:click="$set('openDeactive', false)"
                            class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                            Cancelar
                        </x-secondary-button>
                        <x-secondary-button wire:click="deactiveConfirmed"
                            class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                            Desactivar
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
