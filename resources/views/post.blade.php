@extends('layouts.main')

@section('container')
    <h2 class="mb-3">{{  $post->title  }}</h2>

    <p>by. Kafi in <a href="/categories/{{ $post->category->name  }}">{{ $post->category->name  }}</a></p>

    {!! $post->body  !!}

    <a href="/posts">Back to Posts</a>
@endsection
