@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 white:border-indigo-600 text-sm font-medium leading-5 text-black-900 white:text-black-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black-500 white:text-black-400 hover:text-black-700 white:hover:text-black-300 hover:border-black-300 white:hover:border-black-700 focus:outline-none focus:text-black-700 white:focus:text-black-300 focus:border-gray-300 white:focus:border-black-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
