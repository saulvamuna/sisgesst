<div>
    <x-navbar-company :company="$companies" />

    <div class="w-full overflow-hidden pb-7" style="height: 84vh">
        <x-content-block>
            <h1 class="bg-teal-600 p-1 mb-6 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">
                Procesos evaluados
            </h1>

            @if ($evaluations->count() > 0)
                <table class="w-full rounded-lg overflow-hidden">
                    <thead class="rounded-t-lg">
                        <tr class=" bg-teal-600 text-center text-gray-100 uppercase text-sm leading-normal">
                            <th class="py-3 px-6">N°</th>
                            <th class="py-3 px-6">Tarea</th>
                            <th class="py-3 px-6">Descripción</th>
                            <th class="py-3 px-6">Actividad</th>
                            <th class="py-3 px-6">Proceso</th>
                            <th class="py-3 px-6">Evaluador</th>
                            <th class="py-3 px-6">Fecha Evaluacion</th>
                            <th class="py-3 px-6">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-600 text-sm font-light">
                        @forelse ($evaluations as $key => $evaluation)
                            <tr class="text-left border-b-2 border-gray-200">
                                <td class="py-4 px-6">{{ $key + 1 }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->description }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->activity->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->task->activity->process->name }}</td>
                                <td class="py-4 px-6">{{ $evaluation->evaluator }}</td>
                                <td class="py-4 px-6">{{ $evaluation->created_at }}</td>
                                <td class="py-3 text-center">
                                    <div class="flex item-center justify-center align-middle">
                                        <div class="flex group relative">
                                            <span
                                                class="w-32 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-14 opacity-0 absolute bg-green-600 rounded-lg px-2">
                                                Ver
                                                evaluacion
                                            </span>
                                            @livewire('evaluation.detail-evaluation', ['evaluations' => $evaluation, 'companyId' => $companyId], key(time() . $evaluation->id))
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-3xl p-5">
                                    <span>No hay informacion</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @else
                <div class="bg-white rounded-lg p-10 w-5/6 mx-auto">
                    <h1 class="text-3xl text-center dark:text-gray-600 font-semibold">No hay procesos disponibles</h1>
                </div>
            @endif

            {{-- <div class="px-6">
                {{ $evaluations->links() }}
            </div> --}}
        </x-content-block>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
