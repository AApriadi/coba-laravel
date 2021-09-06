@extends('dashboard.layouts.main')

@section('container')
    <!-- Main Content-->
    <div class="container">
        <div class="row my-4">
            <div class="col-md-8">
                <article class="fs-6">
                    <h4 class="mb-3">{{ $post->title }}</h4>
                    <a href="/dashboard/posts" class="btn-sm btn-success text-decoration-none"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="/dashboard/posts" class="btn-sm btn-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
                    <a href="/dashboard/posts" class="btn-sm btn-danger text-decoration-none"><span data-feather="x-circle"></span> Delete</a>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"
                         alt="{{ $post->category->name }}">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

