
<x-layout class="light">
    <x-section :sticky-title="[ 'startOffset'=>-130 ]">
        <x-slot name="title">
            {{ $page->title }}
        </x-slot>

        <x-slot name="content" class="max-w-xl">
            @yield('content')
        </x-slot>
    </x-section>
</x-layout>
