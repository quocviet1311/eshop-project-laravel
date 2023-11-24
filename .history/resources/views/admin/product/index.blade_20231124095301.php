@extends('layouts.admin')
@section('title')
    <title>Sản phẩm</title>
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
        @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('products.add') }}" class="btn btn-success float-right m-2">Add </a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($categories as $category) --}}
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Iphone </td>
                                    <td>2.400.000</td>
                                    <td><img src="" alt=""></td>
                                    <td>Điện thoại</td>
                                    <td>
                                        <a href="" class="btn btn-default">Sửa</a>
                                        <a href="" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">Xóa</a>

                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{-- {{ $categories->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
