<div>
    <div class="flex items-center sm:pr-4">
        <h1 class="text-sm lg:text-base xl:text-base 2xl:text-base font-semibold">NIVEL DE PROBABILIDAD (ND*NE)</h1>
    </div>
    <div class="grid grid-cols-4">
        <div
            class="col-span-3 py-2 w-full block text-center bg-gray-50 border border-gray-300 rounded-lg mt-2 border-b border-t shadow-lg">
            <p>Nivel: {{ $probabilityName }}</p>
        </div>
        <div class="col-span-1 ml-2 mt-2 flex items-center rounded-lg justify-center border"
            style="background-color: {{ $probabilityColor }}">
            <p class="text-xl font-semibold text-white">{{ $probabilityValueResult }}</p>
        </div>
    </div>
    <x-selectedMeaning>
        <span class="text-md">{{ $probabilityMeaning }}</span>
    </x-selectedMeaning>
</div>
