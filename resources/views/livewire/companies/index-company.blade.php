<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>
        <div
            class="grid grid-cols-2 md:grid-cols-6 lg:grid-cols-12  align-middle gap-4 font-semibold text-lg text-gray-600">
            <label for="buscarEmp"
                class="shadow-lg shadow-gray-500 bg-gray-100 col-span-3 md:col-span-2 rounded-lg flex items-center justify-center w-full px-3">Buscar
                empresa</label>

            <input wire:model.lazy="search" class="shadow-lg bg-gray-100 shadow-gray-500 focus:ring-green-500 focus:bg-white col-span-7 rounded-lg border-none"
                placeholder="Example: Walter o Example: 45740" type="text" id="buscarEmp">
            <div class="shadow-lg shadow-gray-500 bg-gray-100 hover:bg-white active:bg-gray-100 col-span-2 md:col-span-1 rounded-lg flex align-middle justify-center">
                <button class="px-3">Buscar</button>
            </div>

            @can('Crear Compañías')
                <div class="shadow-lg shadow-gray-500 bg-green-600 col-span-2 rounded-lg flex items-center justify-center">
                    <livewire:companies.create-company />
                </div>
            @endcan

        </div>
        <div class="grid lg:grid-cols-3 gap-8 mt-10 md:grid-cols-2 ">
            @foreach ($companies as $company)
                @if ($company->is_active === 1)
                    <a href="{{ route('show-company', ['id' => $company->id]) }}"
                        class="block hover:shadow-lg hover:shadow-gray-400 active:bg-green-600 bg-white p-3 rounded-lg bg-opacity-70 hover:bg-opacity-100 duration-500 ease-out">
                        <div class=" bg-green-600 p-1 mb-2 font-semibold rounded-lg mx-auto text-center text-gray-100">
                            <p class="block text-lg mx-3">{{ $company->name }}</p>
                        </div>
                        <div class="">
                            <h1 class=""><i class="fa-solid fa-hashtag my-auto text-gray-500 w-10"></i>Nit:
                                {{ $company->nit }}</h1>
                            <h1 class=""><i class="fa-regular fa-envelope my-auto text-gray-500 w-10"></i>Email:
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
                @endif
            @endforeach
        </div>
    </x-content-block>
</div>
