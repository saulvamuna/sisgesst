<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <x-content-admin>
            <x-search-admin />

            <table class="w-full table-auto rounded-lg overflow-hidden mt-4">
                <thead class="rounded-t-lg">
                    <tr class="bg-[#db9616] text-gray-100 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">N°</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="hidden md:block py-3 px-6 text-center">Correo</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-600 text-sm font-light">
                    @foreach ($managers as $manager)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span class="font-medium ">{{ $manager->id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{ $manager->name }}</span>
                                </div>
                            </td>
                            <td class="hidden md:block py-3 px-6 text-justify">
                                <div class="flex items-center justify-center">
                                    <span>{{ $manager->email }}</span>
                                </div>
                            </td>
                            <td class="px-6 text-center">
                                <div class="flex item-center justify-center">
                                    @livewire('admin.managers.edit-managers', ['user' => $manager], key($manager->id))
                                    <div>
                                        <button wire:click="confirmDelete({{ $manager->id }})"
                                            class="w-4 text-red-600 hover:text-gray-400 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    @if ($openDelete)
                                        <div class="fixed z-50 inset-0 flex items-center justify-center" wire:click="$set('openDelete', false)">
                                            <div class="absolute inset-0 z-40 bg-black opacity-40 modal-overlay"></div>
                                            <div class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-red-500 rounded-xl modal-container md:max-w-md">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $managers->links() }}
        </x-content-admin>
    </main>
</div>
