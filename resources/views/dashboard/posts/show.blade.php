
@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{  $post->title  }}</h2>

                <a href="" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name  }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-2">
                    {!! $post->body  !!}
                </article>

                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection

