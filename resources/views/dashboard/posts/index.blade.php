@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ auth()->user()->name }} Posts</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success fs-6 col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-2">Create new post</a>
        <table class="table table-striped table-sm">
            @if($posts->count()>0)
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <td>{{ $posts->firstItem() + $key }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info mt-1 mb-1"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning mt-1 mb-1"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger mt-1 mb-1 border-0"
                                        onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <p class="text-center fs-5">No post found.</p>
                @endif
                </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
