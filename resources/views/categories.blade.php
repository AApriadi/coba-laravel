@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center mb-3">Categories</h1>
            <div class="container">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4 mb-3">
                            <a href="/blog?category={{ $category->slug }}">
                                <div class="card bg-dark">
                                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                    <div class="card-img-overlay d-flex align-items-center p-0 text-white">
                                        <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0 ,0.7)">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
