@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <h2>Categories</h2>
            <hr>
            @foreach($categories as $category)
                <article class="mb-4">
                    <ul>
                        <li>
                            <h4><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h4>
                        </li>

                </article>
            @endforeach
        </div>
    </div>
@endsection
