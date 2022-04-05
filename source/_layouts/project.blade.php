
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

    <x-section :sticky-title="[ 'startOffset'=>-130 ]">
        <x-slot name="title">
            {{ $page->title }}
        </x-slot>

        <x-slot name="content" class="content max-w-xl">
            <stacker class="mt-6" :breakpoint="768">
                @yield('content')
            </stacker>
        </x-slot>
    </x-section>
</x-layout>
