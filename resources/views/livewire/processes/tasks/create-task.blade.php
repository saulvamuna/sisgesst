<div>
    <button wire:click="$set('open', true)" class="bg-[#f5b041] rounded-lg px-2 md:px-4 py-2">crear tarea</button>

    <x-dialog-modal wire:model="open">
        <x-slot name="content">
            <h1 class="bg-[#f5b041] p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">Crear tarea</h1>
            <div class="w-4/5 mx-auto my-5">
                <x-label>Seleccione la actividad:</x-label>
                <select wire:model.defer="activity_id" class="bg-gray-200 border-2 border-gray-300 rounded-md w-full h-9 py-0 px-4 focus:ring-0 focus:border-green-600">
                    <option>-- Seleccione --</option>
                    @foreach ($selectedActivity as $activity)
                        <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @endforeach
                </select>
                <x-input-error for="activity_id"/>

                <x-label>Nombre tarea:</x-label>
                <x-input type="text" wire:model.defer="name"/>
                <x-input-error for="name"/>

                <x-label>Descripcion tarea:</x-label>
                <textarea wire:model.defer="description" class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-36"></textarea>
                <x-input-error for="description"/>

                <x-label>Rutinario:</x-label>
                <select wire:model.defer="routine" class="bg-gray-200 border-2 border-gray-300 rounded-md w-full h-9 py-0 px-4 focus:ring-0 focus:border-green-600">
                    <option hidden>-- Seleccione una opción --</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
                <x-input-error for="routine"/>
            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between mt-6 mb-1">
                <button wire:click="$set('open', false)" class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="save" class="bg-[#f5b041] px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Crear</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>

