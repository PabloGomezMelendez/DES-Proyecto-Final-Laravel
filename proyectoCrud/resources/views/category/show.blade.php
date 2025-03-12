@extends('layouts.frontend')

@section('content')
    <div class="container">
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
                            <a href="{{ url('category/create') }}" class="btn btn-primary float-end">Add category</a>
                        </h4>
                    </div>
                    <div class="card-bodfy">
                        <div class="card"></div>
                            <div class="card-header">
                                <h4>Category Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">ID</label>
                                        <div class="border p-2">{{ $category->id }}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Name</label>
                                        <div class="border p-2">{{ $category->name }}</div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="">Description</label>
                                        <div class="border p-2">{{ $category->description }}</div>
                                    </div>
                                </div>
                                <a href="{{ url('category') }}" class="btn btn-secondary mt-3">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
