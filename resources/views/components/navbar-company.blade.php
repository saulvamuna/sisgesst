<div class="h-40 md:h-28 w-[95%] 2xl:w-11/12 mx-auto mt-4 lg:flex lg:h-auto gap-4 mb-6">
    <div class="my-auto absolute lg:relative top-52 md:top-36 lg:top-0">
        <button type="button"
            class="text-gray-100 font-bold text-md bg-[#16a085] flex items-center w-full p-2 transition duration-75 rounded-lg group"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">

            <svg class="w-3 h-3 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
            <span class="flex-1 mx-3 text-left whitespace-nowrap">Gestionar Empresa</span>

        </button>
        <ul id="dropdown-example" class="hidden absolute w-48 py-1 z-30">
            <div class="bg-[#16a085] text-gray-100 rounded-lg">
                @can('Editar Compañías')
                <li>
                    @livewire('companies.edit-company', ['company' => $company])
                </li>
                @endcan

                <li>
                    <a href="{{route('show-evaluation', ['id' => $company->id])}}"
                        class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-5 hover:bg-gray-100 hover:text-gray-600">Procesos evaluados</a>
                </li>
                <li>
                    <a href="{{route('show-company', ['id' => $company->id])}}"
                        class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-5 hover:bg-gray-100 hover:text-gray-600">Procesos sin evaluar</a>
                </li>
                @can ('Desactivar Empresa')
                    <li>
                        <button wire:click="deactivateCompany"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-5 hover:bg-gray-100 hover:text-gray-600">Desactivar</button>
                    </li>
                @endcan
            </div>
        </ul>
    </div>
    <div
        class="bg-gray-300 lg:w-3/4 rounded-lg py-2 pr-10 md:flex pl-5 items-center gap-8 font-semibold text-lg text-gray-600">
        <div>
            <h1>{{ $company->name }}</h1>
        </div>
        <div>
            <h1>Nit: {{ $company->nit }}</h1>
        </div>
    </div>
    <div class="md:right-10 top-40 md:top-36 absolute lg:relative lg:top-0 lg:w-2/5 flex justify-center gap-4 text-gray-100 font-semibold text-md">
        @can('Crear Procesos')
            @livewire('processes.create-process', ['companyId' => $company->id, 'companyName' => $company->name])
        @endcan

        @can('Crear Actividades')
            @livewire('processes.activities.create-activity', ['companyId' => $company->id])
        @endcan

        @can('Crear Tareas')
            @livewire('processes.tasks.create-task', ['companyId' => $company->id])
        @endcan

    </div>
</div>
