@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p><a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">  
                @endif

                <article class="py-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block">Back to Posts</a>


            </div>
        </div>
    </div>

@endsection