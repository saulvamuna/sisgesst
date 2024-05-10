@props(['id' => null, 'maxWidth' => '6xl'])

<x-modal-task :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="md:px-6 py-1">

        <div class=" text-sm text-gray-600">
            {{ $content }}
        </div>

    </div>
</x-modal-task>
