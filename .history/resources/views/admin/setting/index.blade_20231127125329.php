@extends('layouts.admin')
@section('title')
    <title>Setting</title>
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
        @include('partials.content-header', ['name' => 'Setting', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a href="{{ route('setting.create') . '?type=Text' }}"></a>Text</li>
                                <li><a href="{{ route('setting.create') . '?type=Textarea' }}"></a>Textarea</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Config key</th>
                                    <th scope="col">Config value</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($menus as $menu) --}}
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Config key</td>
                                    <td>Config value</td>
                                    <td>
                                        <a href="" class="btn btn-default">Sửa</a>
                                        <a href="" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa menu này không?')">Xóa</a>

                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{-- {!! $menus->links() !!} --}}
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
