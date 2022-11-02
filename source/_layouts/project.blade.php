
<x-layout class="light project {{ $page->bodyClass }}">
    <x-title>
        {{ $page->title }}
    </x-title>

    <x-section>
        <x-section.title heading-level="h1">
            {{ $page->title }}
        </x-section.title>

        <div class="content" data-v-app>
            <stacker class="mt-6" :breakpoint="768">
                @yield('content')
            </stacker>
        </div>
    </x-section>
</x-layout>
