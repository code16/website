@props([
    // slots
    'approach',
    'projects',
    'team',
])

<header class="container lg:pl-16 pt-16">
    <div class="flex gap-12">
        <x-logo />

        <div class="flex gap-10 xl:gap-12 items-end mb-9">
            {{ $slot }}
        </div>
    </div>
</header>
