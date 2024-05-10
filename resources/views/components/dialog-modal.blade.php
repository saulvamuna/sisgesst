@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="md:px-6 py-1">

        <div class=" text-sm text-gray-600">
            {{ $content }}
        </div>
    </div>
</x-modal>
