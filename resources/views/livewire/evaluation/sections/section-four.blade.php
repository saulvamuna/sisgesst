<div>
    <section>
        <article>
            <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
            <div class="flex justify-center">
                <h1 class="text-xl font-bold mb-10 m-4">NÚMERO DE EXPUESTOS</h1>
            </div>
            <div class="grid grid-cols-2 gap-x-10 gap-y-20 p-6">
                <div>
                    <x-number-linked wire:model="linked"/>
                    <x-input-error for="linked"/>
                </div>
                <div>
                    <x-number-contractors wire:model="contractor"/>
                    <x-input-error for="contractor"/>
                </div>
                <div>
                    <x-number-temporary wire:model="temporary"/>
                    <x-input-error for="temporary"/>
                </div>
                <div>
                    <x-number-time wire:model="time"/>
                    <x-input-error for="time"/>
                </div>
            </div>
        </article>
    </section>
</div>
