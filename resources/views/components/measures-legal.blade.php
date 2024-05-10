
<div class="mx-auto text-center">
    <div class="flex justify-center mx-auto">
        <div class="relative focus-within:bg-green-600 focus-within:text-white border border-gray-600 focus-within:border-green-600  rounded-lg h-24 w-24 m-2">
            <div class="flex flex-col items-center justify-center w-full h-full border-2 rounded-lg p-4 transition-transform duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-8 h-8 svg-icon focus-within:text-white">
                    <path fill="#c2c2c2" d="M3 3.5A1.5 1.5 0 014.5 2h6.879a1.5 1.5 0 011.06.44l4.122 4.12A1.5 1.5 0 0117 7.622V16.5a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 16.5v-13zm10.857 5.691a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 00-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
                <label class="text-center text-xl font-semibold">SI</label>
                <input wire:model="legal" class="opacity-0 absolute top-0 left-0 h-full w-full m-0 cursor-pointer" type="radio" name="legal" value="si">
            </div>
        </div>

        <div class="relative focus-within:bg-red-600 focus-within:text-white border border-gray-600 focus-within:border-red-600  rounded-lg h-24 w-24 m-2">
            <div class="flex flex-col items-center justify-center w-full h-full border-2 rounded-lg p-4 transition-transform duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                    <path fill="#c2c2c2" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg>
                <label class="text-center text-xl font-semibold">NO</label>
                <input wire:model="legal" class="opacity-0 absolute top-0 left-0 h-full w-full m-0 cursor-pointer" type="radio" name="legal" value="si">
            </div>
        </div>
    </div>
    @error('legal') <span class="error text-red-500">{{ $message }}</span> @enderror
</div>
