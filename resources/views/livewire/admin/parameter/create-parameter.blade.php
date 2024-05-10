<div>
    <button wire:click="$set('openCreateParameter', true)"
        class="mt-4 md:mt-0 px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100">Agregar</button>
    <x-dialog-modal wire:model="openCreateParameter" maxWidth="xl">
        <x-slot name="content">
            <div class="bg-green-600 p-1 font-semibold text-xl rounded-lg w-10/12 mx-auto text-center text-gray-100">
                Crear {{ $parameter }}
            </div>
            <div class="px-6">
                <x-label>Nombre</x-label>
                <x-input type="text" wire:model="parameterName" />
                <x-input-error for="parameterName" />
                @if ($parameter != 'risk' && $parameter != 'acceptability')
                    <x-label>Prefijo</x-label>
                    <x-input type="text" wire:model="parameterPrefix" />
                    <x-input-error for="parameterPrefix" />
                @endif
                @if ($parameter != 'acceptability')
                    <x-label>Valor</x-label>
                    <x-input type="text" wire:model="parameterValue" />
                    <x-input-error for="parameterValue" />
                @endif
                <x-label>Significado</x-label>
                <textarea wire:model="parameterMeaning"
                    class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-28"></textarea>
                <x-input-error for="parameterMeaning" />
                <x-label>Color</x-label>
                <x-input type="color" wire:model="parameterColor" />
                <x-input-error for="parameterColor" />
            </div>

            <div class="flex justify-between px-10">
                <button wire:click="$set('openCreateParameter', false)"
                    class="px-6 py-2 bg-gray-600 rounded-lg text-md text-gray-100 mt-10">Cerrar</button>
                <button wire:click="createParameter"
                    class="px-6 py-2 bg-green-600 rounded-lg text-md text-gray-100 mt-10">Agregar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
