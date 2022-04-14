@props([
    'post'
])

@php
/**
 * @var \TightenCo\Jigsaw\Collection\CollectionItem $post
 */
@endphp


<div class="post-item relative mb-8">
    <div class="flex gap-4 max-w-2xl">
        <div class="w-1/4">
            <img src="{{ $post->thumbnail }}" class="object-cover aspect-[4/3]" alt="{{ $post->title }}">
        </div>
        <div class="flex-1">
            <h2 class="mb-3">
                <a href="{{ $post->getUrl() }}" class="text-inherit after:absolute after:inset-0">
                    {{ $post->title }}
                </a>
            </h2>
            <p>{{ $post->description }}</p>
        </div>
    </div>
</div>
