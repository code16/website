@props([
    'post',
    'page',
])

@php
/**
 * @var \TightenCo\Jigsaw\Collection\CollectionItem $post
 */
@endphp

<div class="post-item relative mb-14">
    <div class="flex gap-4 max-w-2xl">
        <div class="w-1/4">
            <img src="{{ $post->thumbnail }}" class="object-cover aspect-[1/1] w-full" alt="{{ $post->title }}">
        </div>
        <div class="flex-1 flex flex-col">
            <h2 class="text-xl font-bold mb-3">
                <a href="{{ $post->getUrl() }}" class="text-inherit after:absolute after:inset-0 after:z-10 hover:underline">
                    {{ $post->title }}
                </a>
            </h2>

            <div class="flex-1 mb-3 opacity-80 font-serif">
                {{ $post->description }}
            </div>

            <div class="opacity-60 text-sm">
                @if($author = $post->author)
                    <span>{{ $page->developers[$author]->name }}</span>
                @endif
                <span class="mx-0.5">&bull;</span>
                @if($date = $post->date)
                    <span>{{ date('M j, Y', $date) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
