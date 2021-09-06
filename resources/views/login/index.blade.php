@extends('layouts.simple')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show fs-6" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show fs-6" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main>
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label>Email address</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                               required>
                        <label>Password</label>
                    </div>
                    <button class="mt-2 w-100 btn btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center fw-bolder fs-6 mt-2">Not Registered?<a href="/register">Register
                        Now!</a></small>
            </main>
        </div>
    </div>
@endsection
