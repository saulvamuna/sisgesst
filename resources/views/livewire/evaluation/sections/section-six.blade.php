<div>
    <section>
        <article>
            <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
            <div class="bg-gray-400 bg-opacity-70 w-3/5 mx-auto text p-4 rounded-md mt-36">
                <h1 class="w-4/6 mx-auto mb-10 rounded-lg py-2 text-xl font-bold text-center bg-gray-300">CUMPLIMIENTO
                    REQUISITO LEGAL</h1>
                <div class="flex justify-around mb-12 p-4" x-data="{ selectedCheckbox: null }">
                    <div class="rounded-lg border-4 border-[#336699] cursor-pointer hover:bg-[#336699]"
                        :class="{ 'bg-[#336699]': selectedCheckbox === 'yes' }">
                        <input type="checkbox" id="yes" wire:model="legal" value="Si" class="hidden"
                            @click="selectedCheckbox = 'yes'" :checked="selectedCheckbox === 'yes'">
                        <label for="yes" class="w-full h-full cursor-pointer">
                            <img class="w-24 mx-6" src="{{ asset('img/like-svgrepo-com.svg') }}" alt="">
                            <p class="text-center text-2xl font-semibold">Si</p>
                        </label>
                    </div>
                    <div class="rounded-lg border-4 border-[#336699] cursor-pointer hover:bg-[#336699]"
                        :class="{ 'bg-[#336699]': selectedCheckbox === 'not' }">
                        <input type="checkbox" id="not" wire:model="legal" value="No" class="hidden"
                            @click="selectedCheckbox = 'not'" :checked="selectedCheckbox === 'not'">
                        <label for="not" class="w-full h-full cursor-pointer">
                            <img class="w-24 mx-6" src="{{ asset('img/dislike-svgrepo-com.svg') }}" alt="">
                            <p class="text-center text-2xl font-semibold">No</p>
                        </label>
                    </div>

                </div>
                <x-input-error for="legal"/>
            </div>
        </article>
    </section>
</div>
