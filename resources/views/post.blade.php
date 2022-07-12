
@extends('layouts.main')
@section('container')
<article>
    <h2>
        {{ $posts->title }}
    </h2>
    <p>by : <a href="/authors/{{ $posts->user->username }}" class="text-decoration-none">{{ $posts->user->name }}</a> in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
    {!! $posts->body !!}
</article>    
<a href="/blog">back to blog</a>
@endsection


