@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{  $post->title  }}</h2>

                <p>by. <a href="/posts?author={{ $post->author->username  }}">{{ $post->author->name  }}</a> in <a href="/posts?category={{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name  }}</a></p>

            @if ($post->image)
                <div style="max-height: 400px;overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">
            @endif

                <article class="my-2">
                    {!! $post->body  !!}
                </article>

                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection
