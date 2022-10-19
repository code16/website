@props([
    'light' => false,
])

<x-link :attributes="$attributes->class([
    'inline-block px-8 py-3.5 rounded-[.875rem] border-current border-2 text-inherit text-sm uppercase font-sans font-bold tracking-wider !no-underline',
    'hover:bg-black hover:border-black hover:text-white' => !$light,
    'hover:bg-white hover:border-white hover:text-black' => $light,
])">
    {{ $slot }}
</x-link>
