@extends('layouts.admin')
@section('title')
    <title>Setting</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Setting', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Config Key</label>
                                <input type="text" class="form-control" name="config_key" placeholder="Nhập config key">
                            </div>
                            @if (request)
                                <div class="form-group">
                                    <label>Config Value</label>
                                    <input type="text" class="form-control" name="config_value"
                                        placeholder="Nhập config value">
                                </div>
                            @elseif()
                            @endif


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
