

<x-layout class="light">
    <x-title>
        {{ $page->title }}
    </x-title>

    <x-meta.image :content="$page->thumbnail" />
    <x-meta.type content="article" />

    <x-section class="content" data-image-dialog>
        <div class="mb-8">
            <h1 class="!mb-0">
                {{ $page->title }}
            </h1>

            @if($page->date)
                <div class="text-grey-darker text-sm font-sans mt-2">
                    {{ date('F j, Y', $page->date) }}
                </div>
            @endif
        </div>

        <div>
            @yield('content')
        </div>

        <x-post.author-card :page="$page" />
    </x-section>
</x-layout>

