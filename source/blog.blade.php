


<x-layout>
    <div class="section__content">
        <h1 class="inline-block text-2xl uppercase tracking-widest mb-12">
            Posts
        </h1>
        @foreach($posts as $post)
            <x-post-item :post="$post" />
        @endforeach
    </div>
</x-layout>
