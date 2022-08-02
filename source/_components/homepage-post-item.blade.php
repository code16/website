@props([
    'post',
    'page',
])

@php
/**
 * @var \TightenCo\Jigsaw\Collection\CollectionItem $post
 */
@endphp

<div class="post-item relative mt-3 mb-3">
    <h2 class="text-xl mt-3 mb-1">
        <a href="{{ $post->getUrl() }}" class="text-inherit after:absolute after:inset-0 after:z-10">
            {{ $post->title }}
        </a>
    </h2>

    <div class="opacity-60 text-sm mb-6">
        @if($author = $post->author)
            <span>{{ $page->developers[$author]->name }}</span>
        @endif
        <span class="mx-0.5">&bull;</span>
        @if($date = $post->date)
            <span>{{ date('M j, Y', $date) }}</span>
        @endif
    </div>
</div>
