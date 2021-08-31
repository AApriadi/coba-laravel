@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <article class="mb-4">
                <h4>{{ $post->title }}</h4>
                <h6>By. <a href="/authors/{{ $post->user->username }}"> {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                {!! $post->body !!}
            </article>
        </div>
    </div>
@endsection
