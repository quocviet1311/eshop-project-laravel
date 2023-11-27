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
                        <form action="{{ route('setting.store') . '' }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Config Key</label>
                                <input type="text" class="form-control @error('config_key') is-invalid @enderror"
                                    name="config_key" placeholder="Nhập config key">
                            </div>
                            @error('config_key')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @if (request()->type === 'Text')
                                <div class="form-group">
                                    <label>Config Value</label>
                                    <input type="text" class="form-control @error('config_value') is-invalid @enderror"
                                        name="config_value" placeholder="Nhập config value">
                                </div>
                                @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @elseif(request()->type === 'Textarea')
                                <textarea type="text" class="form-control @error('config_value') is-invalid @enderror" name="config_value"
                                    placeholder="Nhập config value" rows="5"></textarea>
                                @error('config_value')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endif


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
