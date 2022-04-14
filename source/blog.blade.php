


<x-layout>

    <x-section>
        @foreach($posts as $post)
            <x-post-item :post="$post" />
        @endforeach
        <x-post-item :post="$post" />
        <x-post-item :post="$post" />
        <x-post-item :post="$post" />
        <x-post-item :post="$post" />
    </x-section>

</x-layout>
