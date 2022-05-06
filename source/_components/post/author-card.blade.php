@props([
    'page'
])

@if($author = $page->author)
    <section class="content mt-16 mb-12" aria-label="Author">
        <div class="border p-6">
            <div class="flex items-center gap-6">
                <div>
                    <img class="h-12 w-12 rounded-full" src="{{ $page->developers[$author]->avatar }}" alt="{{ $page->developers[$author]->name }}">
                </div>
                <div class="flex-1">
                    <h2 class="sr-only">
                        Author
                    </h2>
                    <strong>
                        {{ $page->developers[$author]->name }}
                    </strong>
                    @if($twitter = $page->developers[$author]->twitter)
                        <div>
                            <a href="{{ $twitter }}" target="_blank">twitter</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
