@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Post</h1>
    @foreach ($posts as $post)
    <article class="mb-3 border-bottom pb-3">
       <h2>
           <a href="/posts/{{ $post->slug  }}" class="text-decoration-none">{{ $post->title  }}<a>
       </h2>
       <p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug  }}">{{ $post->category->name  }}</a></p>
       <p>{{ $post->excerpt  }}</p>
       <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
    </article>
    @endforeach
@endsection
