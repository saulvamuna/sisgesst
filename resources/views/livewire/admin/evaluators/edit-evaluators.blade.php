<div>
    <button wire:click="$set('open', true)" class="w-4 mr-2 transform text-blue-600 hover:text-gray-400 hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
    </button>

    <x-dialog-modal max-width="6xl" wire:model="open">
        <x-slot name="content">
            <h1 class="bg-blue-500 p-1 mb-2 font-semibold text-2xl rounded-lg w-5/6 mx-auto text-center text-gray-100">Editar Evaluadores</h1>

            <div class="grid grid-cols-2">
                <div>
                    <div class="flex flex-col m-4 ">
                        <label class="text-left font-bold">Nombre:</label>
                        <input wire:model="name" type="text" class="border-gray-300 rounded-md focus:ring-1 focus:ring-blue-600 focus:border-blue-600 bg-[#EEEFF1] focus:bg-white">
                        <x-input-error for="name" />
                    </div>
                    <div class="flex flex-col m-4">
                        <label class="text-left font-bold">Correo:</label>
                        <input wire:model="email" type="email" class="border-gray-300 rounded-md focus:ring-1 focus:ring-blue-600 focus:border-blue-600 bg-[#EEEFF1] focus:bg-white">
                        <x-input-error for="email" />
                    </div>
                    <div class="flex flex-col m-4">
                        <label class="text-left font-bold">Contraseña:</label>
                        <input wire:model="password" type="password" class="border-gray-300 rounded-md focus:ring-1 focus:ring-blue-600 focus:border-blue-600 bg-[#EEEFF1] focus:bg-white">
                        <x-input-error for="password" />
                    </div>
                    <div class="flex flex-col m-4">
                        <label class="text-left font-bold">Rol:</label>
                        <select wire:model="selectedRole" class="border-gray-300 rounded-md focus:ring-1 focus:ring-blue-600 focus:border-blue-600 bg-[#EEEFF1] focus:bg-white">
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex flex-col m-4">
                    <label class="text-center text-lg font-bold">Permisos</label>
                    <ul class="grid grid-cols-3 text-left text-sm">
                        @foreach ($permissions as $permission)
                            <li class="my-2 flex text-black items-center">
                                <input id="permission-{{ $permission->id }}" type="checkbox" wire:model="selectedPermissions" value="{{ $permission->id }}" class="mr-1 rounded-xl focus:ring-transparent ring-0 text-teal-600 active:scale-125 duration-700 cursor-pointer" @if(in_array($permission->id, $selectedPermissions)) checked @endif>
                                <label for="permission-{{ $permission->id }}" class="cursor-pointer hover:text-gray-500">{{ $permission->name }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="w-4/5 md:w-3/5 mx-auto flex justify-between mt-6 mb-3">
                <button wire:click="$set('open', false)" class="bg-gray-300 px-5 py-1 rounded-lg font-semibold text-lg text-gray-600">Cancelar</button>
                <button wire:click="updateManager" class="bg-blue-500 px-5 py-1 rounded-lg font-semibold text-lg text-gray-100">Confirmar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
