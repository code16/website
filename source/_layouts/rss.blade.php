<?php echo "<?xml version=\"1.0\"?>\n"; ?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <title>Code 16’s Blog</title>
    <link href="{{ $page->baseUrl }}/blog" />
    <link type="application/atom+xml" rel="self" href="{{ $page->getUrl() }}" />
    <updated>{{ date(DATE_ATOM) }}</updated>
    <id>{{ $page->getUrl() }}</id>
    <author>
        <name>philippe@code16.fr (Philippe Lonchampt)</name>
    </author>
    @yield('entries')
</feed>
