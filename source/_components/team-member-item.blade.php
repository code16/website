@props([
    'member'
])

<div class="mb-8">
    <div class="flex items-center gap-3 mb-2">
        <img class="h-12 w-12 rounded-full" src="{{ $member->avatar }}" alt="{{ $member->name }}">
        <div class="text-xl">
            {{ $member->name }}
        </div>
    </div>
    <x-paragraph>
        {{ $slot }}
    </x-paragraph>
</div>
