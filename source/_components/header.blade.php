@props([
    // slots
    'approach',
    'projects',
    'team',
])

<header>
    <div class="container">
        <div class="flex gap-12">
            <x-logo />

            <div class="flex gap-12 items-center">
                {{ $slot }}
            </div>
        </div>
    </div>
</header>
