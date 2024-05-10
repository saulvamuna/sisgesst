<div>
    <div class="mb-2 border-2 border-gray-300 rounded-lg bg-gray-300 focus-within:bg-green-500 focus-within:border-green-500 ease-in duration-300">
        <div class="flex items-center justify-between px-3 py-2">
            <div class="flex items-center sm:pr-4">
                <h1 class="font-semibold">Sugerencia</h1>
            </div>
        </div>
        <div class="px-4 py-2 bg-white rounded-b-lg">
            <textarea wire:model.defer="administrativeControlSuggestion" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..."></textarea>
        </div>
    </div>
    @error('administrativeControls') <span class="error text-red-500">{{ $message }}</span> @enderror
</div>
