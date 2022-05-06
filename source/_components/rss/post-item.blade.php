@props([
    'post'
])

@php
/**
 * @var \TightenCo\Jigsaw\Collection\CollectionItem $post
 */
@endphp

<entry>
    <id>{{ $post->getUrl() }}</id>
    <link type="text/html" rel="alternate" href="{{ $post->getUrl() }}" />
    <title>{{ $post->title }}</title>
    <published>{{ date(DATE_ATOM, $post->date) }}</published>
    <updated>{{ date(DATE_ATOM, $post->date) }}</updated>
    <author>
        <name>{{ $post->developers[$post->author]->name }}</name>
    </author>
    <summary type="html">{{ $post->description }}</summary>
    <content type="html"><![CDATA[
        @includeFirst(['_posts.' . $post->getFilename(), '_posts._tmp.' . $post->getFilename()])
        ]]></content>
</entry>
