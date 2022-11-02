@props([
    'headingLevel' => null,
])


<div class="mb-6 md:mb-8">
    <x-heading :level="$headingLevel ?? 'h2'" class="text-4xl font-bold">
        {{ $slot }}
    </x-heading>
</div>
