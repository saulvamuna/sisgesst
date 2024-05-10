<div>
    <button wire:click="$set('openDetail', true)"
        class="w-4 mr-2 text-green-600 transform hover:text-gray-400 hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
    </button>

    <x-dialog-modal wire:model="openDetail" maxWidth="4xl">
        <x-slot name="content">
            {{-- <div class="flex items-center justify-between">
                <div class="flex">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-16">
                    <p class="my-4 text-[#FFAD19] px-3 text-3xl font-extrabold">SISGESST</p>
                </div>
                <div class="text-right">
                    <h1 class="font-bold">Proteger la vida y el bienestar de los trabajadores es cultura de nuestra organización</h1>
                    <p class="text-gray-600">Esto esta basado en la Resolución 0312 de 2019</p>
                </div>
            </div> --}}
            <div id="contentEval" class="relative pr-2 h-[83vh] overflow-y-scroll">
                @livewire('evaluation.details.detail-one', ['evaluations' => $evaluations])
                @livewire('evaluation.details.detail-two', ['evaluations' => $evaluations])
                @livewire('evaluation.details.detail-three', ['evaluations' => $evaluations])
                @livewire('evaluation.details.detail-four', ['evaluations' => $evaluations])
                @livewire('evaluation.details.detail-five', ['evaluations' => $evaluations])
            </div>
            <div class="flex justify-between my-4">
                <button wire:click="$set('openDetail', false)"
                    class="mt-6 bg-gray-300 px-5 rounded-lg font-semibold text-lg text-gray-600">
                    Cerrar
                </button>
                <a class="mt-6 bg-green-600 text-gray-100 px-5 py-1 rounded-lg font-semibold text-lg"
                    href="{{ route('administrators.report', ['id' => $evaluations->id]) }}" target="_BLANK">
                    Descargar
                </a>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
