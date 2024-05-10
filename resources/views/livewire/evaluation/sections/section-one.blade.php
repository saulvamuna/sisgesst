<div>
    <h1 class="bg-green-600 p-1 mt-2 mb-16 font-semibold text-2xl rounded-lg w-4/5 mx-auto text-center text-gray-100">
        Proceso: {{ $processName }}
    </h1>
    <div class="w-4/5 mx-auto flex justify-between gap-6 mb-14">
        <div class="w-2/4 bg-gray-400 rounded-lg p-8 relative">
            <h2 class="text-xl font-bold bg-gray-300 w-full pl-4 py-1 rounded-md mb-4">Actividad:</h2>
            <select wire:model="activityId"
                class="bg-gray-300 focus:bg-gray-100 border-2 border-gray-300 rounded-md w-full h-14 py-0 px-4 focus:ring-0 focus:border-green-600">
                <option>-- Seleccione --</option>
                @foreach ($activities as $activity)
                    <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                @endforeach
            </select>
            <x-input-error for="activityId"/>
        </div>
        <div class="w-2/4 bg-gray-400 rounded-lg p-8 relative">
            <h2 class="text-xl font-bold bg-gray-300 w-full pl-4 py-1 rounded-md mb-4">Tarea:</h2>

            <select wire:model="taskId"
                class="bg-gray-300 focus:bg-gray-100 border-2 border-gray-300 rounded-md w-full h-14 py-0 px-4 focus:ring-0 focus:border-green-600">
                <option>-- Seleccione --</option>
                @if ($tasks)
                    @foreach ($tasks as $task)
                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                    @endforeach
                @endif
            </select>
            <x-input-error for="taskId"/>
        </div>
    </div>
    <div class="w-4/5 mx-auto flex justify-between gap-6">
        <div class="w-2/4 bg-gray-400 rounded-lg p-8">
            <h2 class="text-xl font-bold bg-gray-300 w-full pl-4 py-1 rounded-md mb-4">Clasificacion del peligro:</h2>
            <select wire:model="dangerClassification"
                class="bg-gray-300 focus:bg-gray-100 border-2 border-gray-300 rounded-md w-full h-14 py-0 px-4 focus:ring-0 focus:border-green-600">
                <option value="">-- Seleccione --</option>
                <option value="Biológico">Biológico</option>
                <option value="Físico">Físico</option>
                <option value="Químico">Químico</option>
                <option value="Físico-Químico">Físico-Químico</option>
                <option value="Biomecánico">Biomecánico</option>
                <option value="Mecánico">Mecánico</option>
                <option value="Eléctrico">Eléctrico</option>
                <option value="Locativo">Locativo</option>
                <option value="Psicosocial">Psicosocial</option>
                <option value="Público">Público</option>
                <option value="Saneamiento">Saneamiento</option>
                <option value="Fenómenos naturales">Fenómenos naturales</option>
            </select>
            <x-input-error for="dangerClassification"/>
        </div>
        <div class="w-2/4 bg-gray-400 rounded-lg p-8">
            <h2 class="text-xl font-bold bg-gray-300 w-full pl-4 py-1 rounded-md mb-4">Descripcion del peligro:</h2>

            <select wire:model="dangerDescription"
                class="bg-gray-300 focus:bg-gray-100 border-2 border-gray-300 rounded-md w-full h-14 py-0 px-4 focus:ring-0 focus:border-green-600">
                <option>-- Seleccione --</option>
                @if ($danger_descriptions)
                    @foreach ($danger_descriptions as $description)
                        <option value="{{ $description->id }}">{{ $description->danger_description }}</option>
                    @endforeach
                @endif
            </select>
            <x-input-error for="dangerDescription"/>
        </div>
    </div>
</div>
