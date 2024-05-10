<div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            EVALUACION DEL RIESGO
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Nivel de deficiencia(ND)
            </div>
            <div class="col-span-2 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $deficiencyLevel->name . ' (' . $deficiencyLevel->prefix . ')' }}
            </div>
            <div
                class="col-span-1 w-full p-2 border-r-2 border-b-2 border-gray-500 flex justify-center items-center">
                {{ $deficiencyLevel->value }}
            </div>
            <div class="col-span-6 w-full p-2 border-b-2 border-gray-500">
                {{ $deficiencyLevel->meaning }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Nivel de exposicion(NE)
            </div>
            <div class="col-span-2 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $exposureLevel->name }}
            </div>
            <div
                class="col-span-1 w-full p-2 border-r-2 border-b-2 border-gray-500 flex justify-center items-center">
                {{ $exposureLevel->value }}
            </div>
            <div class="col-span-6 w-full p-2 border-b-2 border-gray-500">
                {{ $exposureLevel->meaning }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Nivel de probabilidad(ND * NE)
            </div>

            <div class="col-span-2 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $probabilityLevel->name }}
            </div>
            <div
                class="col-span-1 w-full p-2 border-r-2 border-b-2 border-gray-500 flex justify-center items-center">
                {{ $evaluations->value_probability_level }}
            </div>
            <div class="col-span-6 w-full p-2 border-b-2 border-gray-500">
                {{ $probabilityLevel->meaning }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Nivel de consecuencia
            </div>

            <div class="col-span-2 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $consequenceLevel->name }}
            </div>
            <div
                class="col-span-1 w-full p-2 border-r-2 border-b-2 border-gray-500 justify-center flex items-center">
                {{ $consequenceLevel->value }}
            </div>
            <div class="col-span-6 w-full p-2 border-b-2 border-gray-500">
                {{ $consequenceLevel->meaning }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div
                class="col-span-3 w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500 flex items-center">
                Nivel de riesgo intervencion(NR)
            </div>

            <div class="col-span-2 w-full border-r-2 border-b-2 border-gray-500 p-2 flex items-center">
                {{ $interventionLevel->name }}
            </div>
            <div
                class="col-span-1 w-full p-2 border-r-2 border-b-2 border-gray-500 flex justify-center items-center">
                {{ $evaluations->value_probability_level * $consequenceLevel->value }}
            </div>
            <div class="col-span-6 w-full p-2 border-b-2 border-gray-500">
                {{ $interventionLevel->meaning }}
            </div>
        </div>
        <div class="text-left w-full grid grid-cols-12">
            <div class="col-span-3 w-full bg-gray-300 font-bold border-r-2 p-2 border-gray-500 flex items-center">
                Aceptabilidad del riesgo
            </div>

            <div class="col-span-2 w-full border-r-2 border-gray-500 p-2">
                {{ $riskAcceptability->name }}
            </div>
            <div class="col-span-7 w-full p-2 border-gray-500">
                {{ $riskAcceptability->meaning }}
            </div>
        </div>
    </div>
</div>
