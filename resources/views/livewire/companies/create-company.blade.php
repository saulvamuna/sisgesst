<div>
    <button wire:click="$set('open', true)" class="text-gray-100 p-1">Registrar Empresa</button>

    <x-dialog-modal max-width="3xl" wire:model="open">
        <x-slot name="content">
            <h1 class="bg-green-600 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">
                Registar empresa</h1>
            <div class="w-4/5 mx-auto my-5">
                <x-label>Nit:</x-label>
                <x-input type="text" wire:model.defer="nit" />
                <x-input-error for="nit" />

                <x-label>Nombre:</x-label>
                <x-input type="text" wire:model.defer="name" />
                <x-input-error for="name" />

                <x-label>Correo electronico:</x-label>
                <x-input type="email" wire:model.defer="email" />
                <x-input-error for="email" />

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <x-label>Trabajadores directos:</x-label>
                        <x-input type="number" wire:model.defer="direct_workers" />
                        <x-input-error for="direct_workers" />
                    </div>
                    <div>
                        <x-label>Trabajadores indirectos:</x-label>
                        <x-input type="number" wire:model.defer="indirect_workers" />
                        <x-input-error for="indirect_workers" />

                    </div>
                </div>

                <x-label>Elaborado por:</x-label>
                <x-input type="text" wire:model.defer="made_by" />
                <x-input-error for="made_by" />

                <x-label>Cargo:</x-label>
                <x-input type="text" wire:model.defer="position" />
                <x-input-error for="position" />

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <x-label>Ciudad:</x-label>
                        <select wire:model.defer="city"
                            class="bg-gray-200 border-2 border-gray-300 rounded-lg h-8 text-sm pt-1 w-full">
                            <option>Seleccione una ciudad</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }} </option>
                            @endforeach
                        </select>
                        <x-input-error for="city" />

                    </div>
                    <div>
                        <x-label>Sector economico:</x-label>
                        <x-input type="text" wire:model.defer="economic_sector" />
                        <x-input-error for="economic_sector" />
                    </div>
                </div>
            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between">
                <button wire:click="$set('open', false)"
                    class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="save"
                    class="bg-green-600 px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Registrar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
