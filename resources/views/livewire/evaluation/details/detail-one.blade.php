<div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            PROCESO
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full bg-gray-300 font-bold border-r-2 p-2 border-b-2 border-gray-500">
                Nombre
            </div>
            <div class="w-full bg-gray-300 font-bold border-b-2 p-2 border-gray-500">
                Descripcion
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full border-r-2 border-gray-500 text-left p-2">
                {{ $evaluations->task->activity->process->name }}
            </div>
            <div class="w-full text-left p-2">
                {{ $evaluations->task->activity->process->description }}
            </div>
        </div>
    </div>

    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            ACTIVIDAD
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full bg-gray-300 font-bold border-r-2 p-2 border-b-2 border-gray-500">
                Nombre
            </div>
            <div class="w-full bg-gray-300 font-bold border-b-2 p-2 border-gray-500">
                Descripcion
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full border-r-2 border-gray-500 text-left p-2">
                {{ $evaluations->task->activity->name }}
            </div>
            <div class="w-full text-left p-2">
                {{ $evaluations->task->activity->description }}
            </div>
        </div>
    </div>

    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            TAREA
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full bg-gray-300 font-bold border-r-2 p-2 border-b-2 border-gray-500">
                Nombre
            </div>
            <div class="w-full bg-gray-300 font-bold border-b-2 p-2 border-gray-500">
                Descripcion
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-2">
            <div class="w-full border-r-2 border-gray-500 text-left p-2">
                {{ $evaluations->task->name }}
            </div>
            <div class="w-full text-left p-2">
                {{ $evaluations->task->description }}
            </div>
        </div>
    </div>
</div>
