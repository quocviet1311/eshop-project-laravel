@extends('layouts.admin')
@section('title')
    <title>Menu</title>
@endsection
@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Slider', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('slider.create') }}" class="btn btn-success float-right m-2">Add </a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên slider</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Slider</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                        <td><img src="/upload/slider/slider_03.jpg" alt="" width="50"></td>
                                        <td>
                                            <a href="" class="btn btn-default">Sửa</a>
                                            <a href="" class="btn btn-danger"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa menu này không?')">Xóa</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {!! $sliders->links() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
