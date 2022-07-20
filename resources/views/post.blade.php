
@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <article>
            <h2>
                {{ $posts->title }}
            </h2>
            <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="card-img-top" alt="{{ $posts->category->name }}">
            <p>by : <a href="/authors/{{ $posts->user->username }}" class="text-decoration-none">{{ $posts->user->name }}</a> in <a href="/categories/{{ $posts->category->slug }}" class="img-fluid">{{ $posts->category->name }}</a></p>
            <article class="my-3 fs-5">
                {!! $posts->body !!}
            </article>
        </article>    
        <a href="/blog">back to blog</a>
        </div>
    </div>
</div>

@endsection


