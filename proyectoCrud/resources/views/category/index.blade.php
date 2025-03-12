@extends('layouts.frontend')

@section('content')
    <div class="container">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Category List
                            @auth
                                <a href="{{ url('category/create') }}" class="btn btn-primary float-end">Add category</a>
                            @else
                                <button class="btn btn-primary float-end" disabled>Add category </button>
                            @endauth
                        </h4>
                    </div>
                    <div class="card-bodfy">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->status == 1 ? 'Visible' : 'Hidden' }}</td>
                                        <td>
                                            @auth
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{ route('category.show', $category->id) }}"
                                                    class="btn btn-sm btn-info">Show</a>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            @else
                                                <button class="btn btn-sm btn-success" disabled>Edit</button>
                                                <button class="btn btn-sm btn-info" disabled>Show</button>
                                                <button class="btn btn-sm btn-danger" disabled>Delete</button>
                                            @endauth
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
