@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Category', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                                class="btn btn-default">Sửa</a>
                                            <a href="{{ route('categories.delete', ['id' => $category->id]) }}"
                                                class="btn btn-danger"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">Xóa</a>

                                        </td>
                                    </tr>
                                @endforeach
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