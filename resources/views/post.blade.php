@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10">
            <article class="mb-4 fs-6">
               <h4>{{ $post->title }}</h4>
                <h6>By. <a href="/blog?author={{ $post->user->username }}"> {{ $post->user->name }} </a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                @if ($post->image)
                    <div style="max-height: 250px ;overflow: hidden">
                        <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif

                {!! $post->body !!}
                <a href="/blog/" class="d-block mt-3 btn btn-primary"> Back </a>
            </article>
        </div>
    </div>
@endsection
