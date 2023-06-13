@props(['color' => 'blue', 'size' => 'md'])

@php
    $colors = [
        'blue' => 'bg-blue-500 hover:bg-blue-700 text-white',
        'red' => 'bg-red-500 hover:bg-red-700 text-white',
        'green' => 'bg-green-500 hover:bg-green-700 text-white',
        'yellow' => 'bg-yellow-500 hover:bg-yellow-700 text-white',
        'gray' => 'bg-gray-500 hover:bg-gray-700 text-white',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ];
@endphp

<button {{ $attributes->merge(['class' => $colors[$color] . ' ' . $sizes[$size] . ' rounded-md shadow-sm']) }}>
    {{ $slot }}
</button>

