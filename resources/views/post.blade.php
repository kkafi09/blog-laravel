@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{  $post->title  }}</h2>

                <p>by. <a href="/authors/{{ $post->author->username  }}">{{ $post->author->name  }}</a> in <a href="/categories/{{ $post->category->slug  }}" class="text-decoration-none">{{ $post->category->name  }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name  }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-2">
                    {!! $post->body  !!}
                </article>

                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection
