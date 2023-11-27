@extends('layouts.admin')
@section('title')
    <title>Thêm Menu</title>
@endsection
@section('css')
    <link rel="stylesheet" href="admins/product/slider/add/add.css">
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Slider', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('slider.update', ['id' => $slider]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên slider</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Nhập tên slider" value="{{ $slider->name }}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Mô tả slider</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
                                    rows="10">{{ $slider->description }}</textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control-file @error('image_path') is-invalid @enderror"
                                    name="image_path" placeholder="Nhập tên menu">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img class="image_slider" src="{{ $slider->image_path }}" alt="">
                                </div>
                            </div>
                            @error('image_path')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
