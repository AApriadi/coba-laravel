@extends('dashboard.layouts.main')

@section('container')
    <!-- Main Content-->
    <div class="container">
        <div class="row my-4">
            <div class="col-md-8">
                <article class="fs-6">
                    <h4 class="mb-3">{{ $post->title }}</h4>
                    <a href="/dashboard/posts" class="btn btn-success text-decoration-none"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                    @if ($post->image)
                        <div style="max-height: 240px; overflow: hidden">
                            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"  alt="{{ $post->category->name }}">
                    @endif
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

