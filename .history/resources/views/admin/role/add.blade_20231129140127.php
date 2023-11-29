@extends('layouts.admin')
@section('title')
    <title>Thêm Menu</title>
@endsection
@section('css')
    <link rel="stylesheet" href="admins/product/slider/add/add.css">
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Role', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label>Tên Role</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Nhập tên role" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea name="display_name" class="form-control @error('description') is-invalid @enderror" cols="30"
                                    rows="5">{{ old('display_name') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">

                                <div class="card border-primary mb-3 col-md-3">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-primary">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the
                                            bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
