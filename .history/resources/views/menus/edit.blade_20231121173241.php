@extends('layouts.admin')
@section('title')
    <title>Sửa Menu</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Menu', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Tên Menu</label>
                                <input type="text" value="{{ $category->name }}" class="form-control" name="name"
                                    placeholder="Nhập tên Menu">

                            </div>
                            <div class="form-group">
                                <label>Chọn Menu cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn Menu cha</option>
                                    {!! $htmlOption !!}
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
