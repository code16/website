@props([
    'page'
])


<section class="content">
    @if(preg_match('/<h1>(.+)<\/h1>(.+)/s', $slot, $matches))
        <div class="mb-8">
            <h1 class="!mb-0">
                {!! $matches[1] !!}
            </h1>

            @if($page->date)
                <div class="text-grey-darker text-sm font-sans mt-2">
                    {{ date('F j, Y', $page->date) }}
                </div>
            @endif
        </div>

        {!! $matches[2] !!}
    @else
        {{ $slot }}
    @endif
</section>
