
<x-layout class="light project {{ $page->bodyClass }}">
    <x-title>
        {{ $page->title }}
    </x-title>

    <div class="relative">
        <x-section.title
            heading-level="h1"
            :sticky-title-options="['startOffset' => -130]"
        >
            {{ $page->title }}
        </x-section.title>

        <stacker class="content mt-6" :breakpoint="768">
            @yield('content')
        </stacker>
    </div>
</x-layout>
