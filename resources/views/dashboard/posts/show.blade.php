@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span><span> Delete</span>
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px;overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-2">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
