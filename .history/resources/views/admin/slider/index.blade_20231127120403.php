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
@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('admins/slider/index/index.js') }}"></script>
@endsection

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
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <th scope="row">{{ $slider->id }}</th>
                                        <td>{{ $slider->name }}</td>
                                        <td>{{ $slider->description }}</td>
                                        <td><img src="{{ $slider->image_path }}" alt="" width="50"></td>
                                        <td>
                                            <a href="{{ route('slider.edit', ['id' => $slider->id]) }}"
                                                class="btn btn-default">Sửa</a>
                                            <a href=""
                                                data-url="{{ route('slider.delete', ['id' => $slider->id]) }}"
                                                class="btn btn-danger action_delete">Xóa</a>

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
