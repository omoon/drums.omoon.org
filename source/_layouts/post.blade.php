@extends('_layouts.master')

@section('page_title', $page->title)

@section('body')

    <p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @yield('content')


    @if ($page->getNext())
        <p>Read my next post:
            <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
        </p>
    @endif


@endsection
