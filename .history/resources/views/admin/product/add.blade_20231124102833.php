@extends('layouts.admin')
@section('title')
    <title>Thêm Danh Mục</title>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện sản phẩm</label>
                                <input type="file" class="form-control" name="image_path[]">
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file" multiple class="form-control" name="feature_image_path">
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea class="form-control" name="content" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Chọn tags</label>
                                <select class="form-control tags_select_choose" multiple="multiple">

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $(".tags_select_choose").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
        })
    </script>
@endsection
