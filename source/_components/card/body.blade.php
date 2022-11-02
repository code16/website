@props([
    'full' => false,
])

<div {{ $attributes->class(['p-6 flex-1', 'md:px-12' => $full]) }}>
    {{ $slot }}
</div>
