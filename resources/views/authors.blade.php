@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-12">
            <h2>Authors</h2>
            <hr>
            @foreach($users as $user)
                <article class="mb-4">
                    <ul>
                        <li>
                            <h4><a href="/authors/{{ $user->username }}"> {{ $user->name }}</a></h4>
                        </li>

                </article>
            @endforeach
        </div>
    </div>
@endsection
