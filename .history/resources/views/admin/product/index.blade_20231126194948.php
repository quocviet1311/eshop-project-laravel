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

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/product/index/list.js') }}"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('products.create') }}" class="btn btn-success float-right m-2">Add </a>
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
                                @foreach ($products as $productItem)
                                    <tr>
                                        <th scope="row">{{ $productItem->id }}</th>
                                        <td>{{ $productItem->name }}</td>
                                        <td>{{ number_format($productItem->price) }}</td>
                                        <td>
                                            <img class="product_image_150_100" src="{{ $productItem->feature_image_path }}"
                                                alt="">
                                        </td>
                                        <td>{{ optional($productItem->category)->name }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', ['id' => $productItem->id]) }}"
                                                class="btn btn-default">Sửa</a>
                                            <a href="{{ route('products.delete', ['id' => $productItem->id]) }}"
                                                class="btn btn-danger">Xóa</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
