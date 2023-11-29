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
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên Role</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Nhập tên role" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label>Mô tả slider</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
                                    rows="10">{{ old('description') }}</textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
