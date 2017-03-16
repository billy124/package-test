<div>
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->getPublishedDate('jS M, Y') }}</p>
    <p>{{ $page->author }}</p>
    <p>{!! $page->description !!}</p>
</div>