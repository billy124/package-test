<div>
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->getPublishedDate('jS M, Y') }}</p>
    <person>{{ $page->author }}</person>
    <p>{!! $page->description !!}</p>
</div>