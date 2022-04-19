@props([
    'post'
])

@php
/**
 * @var \TightenCo\Jigsaw\Collection\CollectionItem $post
 */
@endphp


<div class="post-item relative mb-16">
    <div class="flex gap-4 max-w-2xl">
        <div class="w-1/4">
            <img src="{{ $post->thumbnail }}" class="object-cover aspect-[4/3]" alt="{{ $post->title }}">
        </div>
        <div class="flex-1">
            <h2 class="text-xl mb-3">
                <a href="{{ $post->getUrl() }}" class="text-inherit after:absolute after:inset-0 after:z-10">
                    {{ $post->title }}
                </a>
            </h2>
            <div class="opacity-75 text-sm">
                <p>
                    {{ $post->description }}
                </p>
            </div>
        </div>
    </div>
</div>
