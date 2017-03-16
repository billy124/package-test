@if($page)
<div>
    <h1>{{ $page->title }}</h1>
    <h2>{{ $page->getPublishedDate('jS M, Y') }}</h2>
    <p>{{ $page->author }}</p>
    <p>{!! $page->description !!}</p>
</div>
@endif