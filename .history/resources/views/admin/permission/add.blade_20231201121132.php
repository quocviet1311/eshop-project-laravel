@extends('layouts.admin')
@section('title')
    <title>Thêm Menu</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Permission', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('menus.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Chọn phân quyền cha</label>
                                <select class="form-control" name="parent_id">
                                    @foreach (config('permissions . table_module') as $moduleItem)
                                        <option value="0">Chọn menu cha</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">
                                            <input type="checkbox" value="list">
                                            Danh sách
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">
                                            <input type="checkbox" value="add">
                                            Thêm
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">
                                            <input type="checkbox" value="edit">
                                            Sửa
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">
                                            <input type="checkbox" value="delete">
                                            Xóa
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
