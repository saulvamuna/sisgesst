@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-green-600 focus:ring-0 rounded-md shadow-sm w-full h-8']) !!}>
