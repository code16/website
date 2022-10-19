@props([
])

<div {{ $attributes->class('rounded-3xl shadow flex flex-col font-serif text-xl') }}>
    {{ $slot }}
</div>
