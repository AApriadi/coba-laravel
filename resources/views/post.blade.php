@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <article class="mb-5">
                <h4>{{ $post["title"] }}</h4>
                <h6>{{ $post["author"] }}</h6>
                <p>{{ $post["body"] }}</p>
            </article>
        </div>
    </div>
@endsection
