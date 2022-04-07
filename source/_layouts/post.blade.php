
<x-layout class="light">
    <div class="relative">
        <x-section.title :options="['startOffset' => -130]">
            {{ $page->title }}
        </x-section.title>

        <div class="content max-w-2xl">
            @yield('content')
        </div>
    </div>
</x-layout>
