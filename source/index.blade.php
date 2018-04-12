@extends('_layouts.master')
@section('body')
<ul>
    @foreach ($posts as $post)
        <li><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
@endsection
