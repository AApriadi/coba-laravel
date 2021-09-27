@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success fs-6 col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-2">Create new category</a>
        <table class="table table-striped table-sm">
            @if($categories->count()>0)
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $categories->firstItem() + $key }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info mt-1 mb-1"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning mt-1 mb-1"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
                    <p class="text-center fs-5">No category found.</p>
                @endif
                </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
