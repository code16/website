

<x-layout class="light">
    <section class="content">
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

        @yield('content')
    </section>

    <x-post.author-card :page="$page" />
</x-layout>

