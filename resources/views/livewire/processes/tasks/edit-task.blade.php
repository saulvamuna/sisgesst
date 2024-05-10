<div>
    <button wire:click="$set('openEditTask', true)" class="w-4 mr-2 transform text-blue-600 hover:text-gray-400 hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
    </button>

    <x-dialog-modal wire:model="openEditTask">
        <x-slot name="content">
            <h1 class="bg-blue-500 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">Editar tarea</h1>

            <div class="w-4/5 mx-auto my-5 text-left">
                <x-label>Seleccione la actividad:</x-label>
                <select wire:model.defer="activity_id" class="bg-gray-200 border-2 border-gray-300 rounded-md w-full h-9 py-0 px-4 mb-4 focus:ring-0 focus:border-green-600">
                    <option>-- Seleccione --</option>
                    @foreach ($selectedActivity as $activity)
                        <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @endforeach
                </select>

                <x-label>Nombre tarea:</x-label>
                <x-input type="text" wire:model.lazy="name" />

                <x-label>Descripcion tarea:</x-label>
                <textarea wire:model.defer="description" class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-36 mb-4"></textarea>

                <x-label>Rutinario:</x-label>
                <select wire:model.defer="routine" class="bg-gray-200 border-2 border-gray-300 rounded-md w-full h-9 py-0 px-4 mb-4 focus:ring-0 focus:border-green-600">
                    <option>-- Seleccione una opción --</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between mt-6 mb-1">
                <button wire:click="$set('openEditTask', false)" class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="updateTask" class="bg-blue-500 px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Editar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>