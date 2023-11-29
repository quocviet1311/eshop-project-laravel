@extends('layouts.admin')
@section('title')
    <title>
        Thêm Menu</title>
@endsection
@section('css')
    <style>
        .card-header {}
    </style>
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
                                <div class="card border-primary mb-3 col-md-12">
                                    <div class="card-header">
                                        <label for="">
                                            <input type="checkbox" value="">
                                        </label>
                                        Module sản phẩm
                                    </div>
                                    <div class="row">
                                        @for ($i = 1; $i <= 4; $i++)
                                            <div class="card-body text-primary">
                                                <h5 class="card-title">
                                                    <label for="">
                                                        <input type="checkbox" value="">
                                                    </label>
                                                    Thêm sản phẩm
                                                </h5>
                                            </div>
                                        @endfor
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
