
<x-layout class="light project {{ $page->bodyClass }}">
    <x-slot name="head">
        @if($page->carouselWidth ?? false)
            <style>
                @foreach(\Illuminate\Support\Arr::wrap($widths) as $nth => $width)
                    @if($width !== 'auto')
                        .carousel:nth-of-type({{ $nth + 1 }}) .VueCarousel-inner {
                            max-width: {{ $width }} !important;
                        }
                    @endif
                @endforeach
            </style>
        @endif
    </x-slot>

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
