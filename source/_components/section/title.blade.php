@props([
    'headingLevel' => null,
])


<div class="mb-4 md:mb-16">
    <x-heading :level="$headingLevel ?? 'h2'" class="text-3xl font-bold">
        {{ $slot }}
    </x-heading>
</div>
