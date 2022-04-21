@props([
    'level',
])

<{{ $level }} {{ $attributes }}>
    {{ $slot }}
</{{ $level }}>
