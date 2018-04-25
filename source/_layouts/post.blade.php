@extends('_layouts.master')

@section('page_title', $page->title)

@section('body')

    <p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->youtube }}?rel=0" allowfullscreen></iframe>
    </div>

    @yield('content')

    @if ($page->getNext())
        <p>Read my next post:
            <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
        </p>
    @endif


@endsection
