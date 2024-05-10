<div>
    <button wire:click="$set('openCreateDangers', true)"
        class="mt-4 md:mt-0 px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100">Agregar</button>
    <x-dialog-modal wire:model="openCreateDangers" maxWidth="xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 font-semibold text-xl rounded-lg w-10/12 mx-auto text-center text-gray-100">
                Crear {{ $danger }}
            </div>

            <div class="px-6">
                <x-label>Peligro</x-label>
                <x-input type="text" wire:model="dangerDescription" />
                <x-input-error for="dangerDescription" />
            </div>


            <div class="flex justify-between px-6">
                <button wire:click="$set('openCreateDangers', false)"
                    class="px-6 py-2 bg-gray-600 rounded-lg text-md text-gray-100 mt-10">Cerrar</button>
                <button wire:click="createDanger"
                    class="px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100 mt-10">Agregar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
