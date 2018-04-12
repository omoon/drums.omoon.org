@extends('_layouts.master')


@section('body')

    <h2>{{ $page->title }}</h2>
    <p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @yield('content')


    @if ($page->getNext())
        <p>Read my next post:
            <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
        </p>
    @endif


@endsection
