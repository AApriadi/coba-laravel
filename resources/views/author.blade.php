@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <h2>Post User : {{ $user }}</h2>
            <hr>
            @foreach($posts as $post)
                <article class="mb-4 border-bottom">
                    <h4>
                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </h4>
                    <h6>By.<a href="/authors/{{ $post->user->username }}"> {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}"><h6>Read More..</h6></a>
                </article>
            @endforeach
        </div>
    </div>
@endsection
