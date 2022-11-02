@props([
    // slots
    'right',
    'left',
])

<div class="grid md:grid-cols-3 gap-6 md:gap-12">
    <div>
        {{ $left }}
    </div>
    <div class="md:col-span-2">
        {{ $right }}
    </div>
</div>
