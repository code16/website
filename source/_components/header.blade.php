@props([
    // slots
    'approach',
    'projects',
    'team',
])

<header style="padding-left: var(--container-padding-x)">
    <div class="flex gap-12">
        <x-logo />

        <div class="flex gap-10 xl:gap-12 items-center">
            {{ $slot }}
        </div>
    </div>
</header>
