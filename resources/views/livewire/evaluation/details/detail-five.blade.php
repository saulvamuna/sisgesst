<div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            MEDIDAS DE INTERVENCION
        </div>
        <div class="text-center font-bold w-full grid grid-cols-12">
            <div class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Medida
            </div>
            <div class="col-span-4 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Descripcion
            </div>
            <div class="col-span-5 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Sugerencia
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Eliminacion
            </div>
            <div class="col-span-4 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $elimination }}
            </div>
            <div class="col-span-5 w-full p-2 border-r-2 border-b-2 border-gray-500 flex items-center">
                {{ $eliminationSuggestion }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Sustitucion
            </div>
            <div class="col-span-4 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $substitution }}
            </div>
            <div class="col-span-5 w-full p-2 border-r-2 border-b-2 border-gray-500 flex items-center">
                {{ $substitutionSuggestion }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Controles de ingenieria
            </div>

            <div class="col-span-4 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $controlEngineering }}
            </div>
            <div class="col-span-5 w-full p-2 border-r-2 border-b-2 border-gray-500 flex items-center">
                {{ $engineeringSuggestion }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Controles administrativos, señalización, advertencia
            </div>

            <div class="col-span-4 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $administrativeControls }}
            </div>
            <div class="col-span-5 w-full p-2 border-r-2 border-b-2 border-gray-500 flex items-center">
                {{ $administrativeSuggestion }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div class="col-span-3 w-full bg-gray-300 font-bold border-r-2 p-2 border-gray-500 flex items-center">
                Equipo / elementos de protección personal
            </div>

            <div class="col-span-4 w-full border-r-2 border-gray-500 p-2 flex items-center">
                {{ $personalProtection }}
            </div>
            <div class="col-span-5 w-full p-2 border-r-2 border-gray-500 flex items-center">
                {{ $protectionSuggestion }}
            </div>
        </div>
    </div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="text-left w-full grid grid-cols-2">
            <div
                class="w-full bg-gray-300 font-bold border-r-2 p-2 border-gray-500 flex items-center">
                Cumplimiento Requisito Legal
            </div>
            <div class="w-full border-r-2 p-2 flex items-center">
                {{ $evaluations->legal_requirement }}
            </div>
        </div>
    </div>
</div>
