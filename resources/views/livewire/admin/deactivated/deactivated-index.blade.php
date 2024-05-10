<div class="flex flex-col">
    <main class="flex-grow flex">
        <x-aside-admin />

        <x-content-admin>
            <div class="text-[#FFAD19] p-1 mt-6 mb-5 font-bold text-5xl rounded-lg w-7/12 mx-auto text-center">Empresas desactivadas</div>

            <x-search-admin />

            <div class="grid lg:grid-cols-3 gap-8 mt-10 md:grid-cols-2 ">
                @foreach ($companies as $company)
                    <div>
                        <a href="{{ route('show-company', ['id' => $company->id]) }}"
                            class="block active:bg-green-600 bg-white p-3 rounded-t-lg bg-opacity-70 hover:bg-opacity-100 duration-500 ease-out">
                            <div
                                class=" bg-green-600 p-1 mb-2 font-semibold rounded-lg mx-auto text-center text-gray-100">
                                <p class="block text-lg mx-3">{{ $company->name }}</p>
                            </div>
                            <div class="">
                                <h1 class=""><i class="fa-solid fa-hashtag my-auto text-gray-500 w-10"></i>Nit:
                                    {{ $company->nit }}</h1>
                                <h1 class=""><i
                                        class="fa-regular fa-envelope my-auto text-gray-500 w-10"></i>Email:
                                    {{ $company->email }}</h1>
                                <h1 class=""><i class="fa-solid fa-city my-auto text-gray-500 w-10"></i>City:
                                    {{ $company->city->name }}</h1>
                                <h1 class=""><i class="fa-solid fa-users text-gray-500 w-10"></i>Direct-workers:
                                    {{ $company->number_direct_workers }} </h1>
                                <h1 class=""><i
                                        class="fa-solid fa-users-slash text-gray-500 w-10"></i>Indirect-workers:
                                    {{ $company->number_direct_workers }}</h1>
                            </div>
                        </a>
                        <div class="flex justify-center bg-white bg-opacity-70 rounded-b-lg">
                            <button wire:click="activateCompany"
                                class="bg-green-600 hover:bg-green-800 px-3 py-1 mt-2 font-semibold rounded-lg mx-auto text-center text-gray-100">Activar</button>
                        </div>
                        @if ($openActive)
                            <div class="fixed z-50 inset-0 flex items-center justify-center">
                                <div wire:click="$set('openActive', true)"
                                    class="absolute inset-0 z-40 bg-black opacity-10 modal-overlay">
                                </div>

                                <div
                                    class="z-50 w-11/12 mx-auto overflow-y-auto bg-white border border-green-600 rounded-xl modal-container md:max-w-md">
                                    <!-- Content of the modal -->
                                    <div class="flex gap-3 py-2 bg-green-600 border border-green-600">
                                        <h3 class="w-full text-2xl text-center text-gray-100 ">Activar empresa
                                        </h3>
                                    </div>
                                    <div class="px-6 py-4 text-left modal-content">
                                        <p class="text-lg text-gray-600 mb-3">
                                            Por favor ingrese el nit de la empresa para activarla
                                        </p>
                                        <x-input type="text" wire:model="nitActive" />
                                        <x-input-error for="nitDeactive" />
                                        <div class="mt-4 text-center">
                                            <x-secondary-button wire:click="$set('openActive', false)"
                                                class="mr-4 text-gray-600 border border-gray-600 shadow-lg hover:shadow-gray-400">
                                                Cancelar
                                            </x-secondary-button>
                                            <x-secondary-button wire:click="ActiveConfirmed({{ $company->id }})"
                                                class="mr-4 text-green-600 border border-green-600 shadow-lg hover:shadow-green-400">
                                                Activar
                                            </x-secondary-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </x-content-admin>
    </main>
</div>
