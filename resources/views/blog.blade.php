@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <article class="mb-5">
                @foreach($posts as $post)
                    <h4>
                        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
                    </h4>
                    <h6>{{ $post["author"] }}</h6>
                    <p>{{ $post["body"] }}</p>
                @endforeach
            </article>
        </div>
    </div>
@endsection
