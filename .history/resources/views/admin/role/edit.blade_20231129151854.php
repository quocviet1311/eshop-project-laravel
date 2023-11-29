@extends('layouts.admin')
@section('title')
    <title>
        Thêm Menu</title>
@endsection
@section('css')
    <link rel="stylesheet" href="admins/user/add/add.css">
    <link rel="stylesheet" href="{{ asset('admins/role/add/add.css') }}">
@endsection
@section('js')
    <script src="{{ asset('admins/role/add/add.js') }}"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Role', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data"
                        style="width: 100%;">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label>Tên Role</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Nhập tên role" value="{{ $role->name }}">
                            </div>

                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea name="display_name" class="form-control @error('description') is-invalid @enderror" cols="30"
                                    rows="5">{{ $role->display_name }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($permissions as $permissionsItem)
                                    <div class="card border-primary mb-3 col-md-12">
                                        <div class="card-header">
                                            <label for="">
                                                <input type="checkbox" class="checkbox_wrapper" value="">
                                            </label>
                                            Module {{ $permissionsItem->name }}
                                        </div>
                                        <div class="row">
                                            @foreach ($permissionsItem->permissionChild as $permissionChildItem)
                                                <div class="card-body text-primary">
                                                    <h5 class="card-title">
                                                        <label for="">
                                                            <input class="checkbox_children" type="checkbox"
                                                                name="permission_id[]"
                                                                value="{{ $permissionChildItem->id }}">
                                                        </label>
                                                        {{ $permissionChildItem->name }}
                                                    </h5>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
