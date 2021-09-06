@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center mb-3">Authors</h1>
            <div class="container">
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-2 mb-3">
                            <a href="/blog?author={{ $user->username }}">
                                <div class="card bg-dark">
                                    <img src="https://source.unsplash.com/500x500?selfie-no{{ $user->id }}" class="card-img" alt="{{ $user->name }}">
                                    <div class="card-img-overlay d-flex align-items-end p-0 text-white">
                                        <h6 class="card-title text-center flex-fill p-1" style="background-color: rgba(0, 0, 0 ,0.7); font-size: small">{{ $user->name }}</h6>
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
