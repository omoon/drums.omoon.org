@extends('_layouts.master')
@section('body')
    Blooooooooog
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
