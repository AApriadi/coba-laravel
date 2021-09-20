@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center fs-6">
        <div class="col-md-12">
            <h1 class="text-center mb-3">{{ $title }}</h1>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="/blog" method="get">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if(request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search"
                                   value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            @if($posts->count()>0)
                <div class="card mb-3">
                    @if ($posts[0]->image)
                        <div style="max-height: 350px; overflow: hidden">
                            <img src="{{ asset('storage/'. $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                    @endif
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                        <h6>
                            <small class="text-muted">
                                By.<a
                                    href="/blog?author={{ $posts[0]->user->username }}"> {{ $posts[0]->user->name }} </a>
                                in <a
                                    href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </small>
                        </h6>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach($posts->skip(1) as $post)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="position-absolute px-3 py-1 fs-6"
                                         style="background-color: rgba(0, 0, 0, 0.6)"><a
                                            href="/blog?category={{ $post->category->slug }}"
                                            class="text-decoration-none text-white">{{ $post->category->name }}</a>
                                    </div>
                                    @if ($post->image)
                                        <div style="max-height: 180px ;overflow: hidden">
                                            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                                        </div>
                                    @else
                                        <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}-{{ $post->id }}" class="card-img-top" alt="{{ $post->category->name }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                        </h5>
                                        <h6>
                                            <small class="text-muted">
                                                By.<a
                                                    href="/blog?author={{ $post->user->username }}"> {{ $post->user->name }} </a>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </h6>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            @else
                <p class="text-center fs-5">No post found.</p>
            @endif

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
@endsection
