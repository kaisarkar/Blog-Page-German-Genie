@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-800',
        'blue' => 'text-blue-800',
        'red' => 'text-red-800',
        'yellow' => 'text-yellow-800',
        'pink' => 'text-pink-800',
        'indigo' => 'text-indigo-800',
        'purple' => 'text-purple-800',
        'green' => 'text-green-800',
        'lime' => 'text-lime-800',
        default => 'text-gray-800',
    };

    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-400',
        'blue' => 'bg-blue-400',
        'red' => 'bg-red-400',
        'yellow' => 'bg-yellow-400',
        'pink' => 'bg-pink-400',
        'indigo' => 'bg-indigo-400',
        'purple' => 'bg-purple-400',
        'green' => 'bg-green-400',
        'lime' => 'bg-lime-400',
        default => 'bg-gray-400',
    };
@endphp

<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor }} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>
