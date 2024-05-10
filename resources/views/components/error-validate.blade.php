<div wire:loading.remove wire:target="save" class="bg-red-100 border-l-4 border-l-red-400 text-red-700 px-4 py-3 relative" @if ($errors->any()) style="display:block;" @else style="display:none;" @endif>
    <strong class="font-bold">¡Error!</strong>
    <span class="block sm:inline">Por favor, completa todos los campos correctamente.</span>
</div>
