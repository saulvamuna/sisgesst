<div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            CLASIFICACION DE PELIGRO
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
                {{ $evaluations->danger_classification }}
            </div>
            <div class="w-full text-left p-2">
                {{ $dangerDescription->danger_description }}
            </div>
        </div>
    </div>

    <div class="border-2 border-gray-500 mb-8">
        <div class="text-center w-full grid grid-cols-3">
            <div
                class="col-span-1 w-full font-bold bg-gray-500 p-2 border-b-2 border-gray-300 text-gray-100">
                PELIGRO
            </div>
            <div class="col-span-2 text-left w-full border-b-2 border-l-2 p-2 border-gray-500">
                {{ $evaluations->danger }}
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-3">
            <div
                class="col-span-1 w-full font-bold bg-gray-500 border-gray-500 text-center p-2 text-gray-100">
                EFECTOS POSIBLES
            </div>
            <div class="col-span-2 w-full text-left p-2 border-l-2 border-gray-500">
                {{ $evaluations->possible_effects }}
            </div>
        </div>
    </div>

    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            CONTROLES EXISTENTES
        </div>
        <div class="text-center w-full grid grid-cols-3">
            <div class="w-full bg-gray-300 font-bold border-r-2 p-2 border-b-2 border-gray-500">
                Fuente
            </div>
            <div class="w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Medio
            </div>
            <div class="w-full bg-gray-300 font-bold border-b-2 p-2 border-gray-500">
                Individuo
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-3">
            <div class="w-full border-r-2 border-gray-500 text-left p-2">
                {{ $evaluations->source }}
            </div>
            <div class="w-full border-r-2 border-gray-500 text-left p-2">
                {{ $evaluations->means }}
            </div>
            <div class="w-full text-left p-2">
                {{ $evaluations->individual }}
            </div>
        </div>
    </div>
</div>
