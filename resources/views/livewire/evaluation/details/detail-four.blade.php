<div>
    <div class="border-2 border-gray-500 mb-8">
        <div class="bg-gray-500 text-gray-100 w-full p-1 font-bold text-lg text-center">
            NUMERO DE EXPUESTOS
        </div>
        <div class="text-center font-bold w-full grid grid-cols-4">
            <div class="w-full bg-gray-300 font-bold border-r-2 p-2 border-b-2 border-gray-500">
                Vinculados
            </div>
            <div class="w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Contratistas
            </div>
            <div class="w-full bg-gray-300 font-bold border-r-2 border-b-2 p-2 border-gray-500">
                Temporales
            </div>
            <div class="w-full bg-gray-300 font-bold border-b-2 p-2 border-gray-500">
                Tiempo de exposicion
            </div>
        </div>
        <div class="text-center w-full grid grid-cols-4">
            <div class="w-full border-r-2 border-gray-500 p-2">
                {{ $evaluations->linked }}
            </div>
            <div class="w-full border-r-2 border-gray-500 p-2">
                {{ $evaluations->contractors }}
            </div>
            <div class="w-full border-r-2 border-gray-500 p-2">
                {{ $evaluations->temporary }}
            </div>
            <div class="w-full p-2">
                {{ $evaluations->exposure_time }}
            </div>
        </div>
    </div>
</div>
