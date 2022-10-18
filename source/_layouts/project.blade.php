
<x-layout class="light project {{ $page->bodyClass }}">
    <x-title>
        {{ $page->title }}
    </x-title>

    <div class="relative">
        <x-section.title
            heading-level="h1"
        >
            {{ $page->title }}
        </x-section.title>

        <div data-v-app>
            <stacker class="content mt-6" :breakpoint="768">
                @yield('content')
            </stacker>
        </div>
    </div>
</x-layout>
