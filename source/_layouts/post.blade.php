

<x-layout class="light">
    <x-post.content :page="$page">
        @yield('content')
    </x-post.content>

    <x-post.author-card :page="$page" />
</x-layout>
