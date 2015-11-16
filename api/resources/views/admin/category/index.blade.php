@extends('admin')
@section('sidebar')


    <div class="list-group">
        <a href="#" class="list-group-item active">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
    </div>
@stop
@section('content')

        <table class="table table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Danh Mục Cha</th>
                <th><button type="button" class="btn btn-success btn-sm pull-right">Thêm Mới</button></th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">1</th>
                <td>{{$category->name}}</td>
                <td>{{$category->parent_id == null ? 'Chính' : $category->parent()->name}}</td>
                <td>
                    <div class="pull-right">
                        {{link_to_action('CategoryController@edit',"Chỉnh Sửa", ['id' => $category->category_id], ['className' => 'btn btn-primary btn-sm']) }}
                    </div>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>


@stop