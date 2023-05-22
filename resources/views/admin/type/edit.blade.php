@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>   
@endif
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div id="edit" class="col-md-10 p-4 border rounded edit">
            <h2>New project</h2>
            <form action="{{ route('admin.types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $type->category) }}">
                    <label for="category" class="form-label">Category</label>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary col-auto mx-2">Submit</button>
                    <button type="reset" class="btn btn-info col-auto mx-1">Reset</button>
                    <div class="col-auto ms-auto">
                        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection