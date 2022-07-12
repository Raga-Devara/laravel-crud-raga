
@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>
    @foreach($posts as $post)
    <article class="mb-5 border-bottom pb-5">
        <h2>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>by : <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{!! $post->excerpt !!}</p>

        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">read more...</a>
    </article>
    @endforeach
@endsection

