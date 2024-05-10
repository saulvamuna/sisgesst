<div>
    <div id="contentEval" class="bg-gray-200 p-4 h-full rounded-lg overflow-hidden hidden lg:grid">
        <!-- component -->
        <h1 class="bg-[#3498db] p-1 mt-2 mb-4 font-semibold text-2xl rounded-lg w-full mx-auto text-center text-gray-100">
            Actividades - {{ $processName }}
        </h1>
        <div class="flex w-full items-center text-lg">
            <input wire:model.lazy="search" class="w-full md:w-1/2 my-4 focus:ring-blue-500 focus:bg-white  rounded-lg border-none" placeholder="Ejemplo: desarrollar mecanismos..." type="text" id="buscarEmp">
            <div class="ml-5 text-gray-600 py-1 bg-gray-100 hover:bg-white active:bg-gray-100 col-span-2 md:col-span-1 rounded-lg flex align-middle justify-center">
                <button class="px-3">Buscar</button>
            </div>
        </div>

        @if ($activities->count() > 0)
            <table class="w-full rounded-lg overflow-hidden">
                <thead class="rounded-t-lg">
                    <tr class="bg-[#3498db] text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">N°</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-center">Descripción</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                        <th class="py-3 px-6 text-center">Tareas</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    @foreach ($activities as $activity)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $activity->id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{ $activity->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-justify">
                                <div class="flex items-center justify-center">
                                    <span>{{ $activity->description }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    @can('Editar Actividades')
                                        <div class="flex group relative">
                                            <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-blue-600 rounded-lg px-2">Editar</span>
                                            <div>@livewire('processes.activities.edit-activity', ['activity' => $activity, 'companyId' => $companyId], key(time() . $activity->id))</div>
                                        </div>
                                    @endcan

                                    @can('Eliminar Actividades')
                                        <div class="flex group relative">
                                            <span
                                                class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-6 opacity-0 absolute bg-red-600 rounded-lg px-2">Eliminar</span>
                                            <div>
                                                <button wire:click="confirmDelete({{ $activity->id }})"
                                                    class="w-4 mr-2 transform
                                                text-red-600 hover:text-gray-400 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    @endcan
                                    @if ($openDelete)
                                        <div class="fixed z-50 inset-0 flex items-center justify-center"
                                            wire:click="$set('openDelete', false)">
                                            <div class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay"></div>
                                            <div
                                                class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                                                <!-- Content of the modal -->
                                                <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                                                    <h3 class="w-full text-2xl text-center text-gray-100 ">Eliminar</h3>
                                                </div>
                                                <div class="px-6 py-4 text-left modal-content">
                                                    <p class="text-xl text-gray-500">
                                                        ¿Estás seguro de que deseas eliminar este proceso?
                                                    </p>
                                                    <div class="mt-4 text-center">
                                                        <x-secondary-button wire:click="$set('openDelete', false)"
                                                            class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                            Cancelar
                                                        </x-secondary-button>
                                                        <x-secondary-button wire:click="deleteConfirmed"
                                                            class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                                                            Eliminar
                                                        </x-secondary-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="text-center">
                                @livewire('processes.tasks.show-task', ['activityId' => $activity->id, 'activityName' => $activity->name, 'companyId' => $companyId], key(time() . $activity->id))
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay actividades disponibles</h1>
            </div>
        @endif
        <div class="px-6">
            {{ $activities->links() }}
        </div>
    </div>


    {{---------------------  RESPONSIVE -----------------------}}
    <div id="contentEval" class="lg:hidden grid grid-cols-1 mx-auto text-base">
        @if ($activities->count() > 0)
            <table class="w-full overflow-hidden rounded-lg">
                <thead>
                    <tr class="bg-[#3498db] text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">N°</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-center">Descripción</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                        <th class="py-3 px-6 text-center">Tareas</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light overflow-hidden">
                    @foreach ($activities as $activity)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $activity->id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{ $activity->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-justify">
                                <div class="flex items-center justify-center">
                                    <span>{{ $activity->description }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    @can('edit.delete.activities')
                                        <div class="flex group relative">
                                            <span
                                                class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-blue-600 rounded-lg px-2">Editar</span>
                                            @livewire('processes.activities.edit-activity', ['activity' => $activity, 'companyId' => $companyId], key(time() . $activity->id))
                                        </div>
                                        <div class="flex group relative">
                                            <span
                                                class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-6 opacity-0 absolute bg-red-600 rounded-lg px-2">Eliminar</span>
                                            <button wire:click="confirmDelete({{ $activity->id }})"
                                                class="w-4 mr-2 transform
                                            text-red-600 hover:text-gray-400 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endcan
                                    @if ($openDelete)
                                        <div class="fixed z-50 inset-0 flex items-center justify-center"
                                            wire:click="$set('openDelete', false)">
                                            <div class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay"></div>
                                            <div
                                                class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
                                                <!-- Content of the modal -->
                                                <div class="flex gap-3 py-2 bg-red-500 border border-red-500">
                                                    <h3 class="w-full text-2xl text-center text-gray-100 ">Eliminar</h3>
                                                </div>
                                                <div class="px-6 py-4 text-left modal-content">
                                                    <p class="text-xl text-gray-500">
                                                        ¿Estás seguro de que deseas eliminar este proceso?
                                                    </p>
                                                    <div class="mt-4 text-center">
                                                        <x-secondary-button wire:click="$set('openDelete', false)"
                                                            class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                                                            Cancelar
                                                        </x-secondary-button>
                                                        <x-secondary-button wire:click="deleteConfirmed"
                                                            class="mr-4 text-red-500 border border-red-500 shadow-lg hover:shadow-red-400">
                                                            Eliminar
                                                        </x-secondary-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="text-center">
                                @livewire('processes.tasks.show-task', ['activityId' => $activity->id, 'activityName' => $activity->name, 'companyId' => $companyId], key(time() . $activity->id))
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay actividades disponibles</h1>
            </div>
        @endif
        <div class="px-6">
            {{ $activities->links() }}
        </div>
    </div>
</div>
