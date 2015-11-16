@extends('admin')
@section('sidebar')


    <div class="list-group">
        <a href="#" class="list-group-item">Quay Lại Danh Sách</a>
        <a href="#" class="list-group-item">Tạo mới Danh Mục</a>

    </div>
@stop
@section('content')

    <form action="" method="post">

    </form>

    <form action="categories/{{$category->category_id}}" method="post" role="form">
    	<legend>Chỉnh sửa: {{$category->name}}</legend>

    	<div class="form-group">
    		<label for="name"></label>
    		<input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
    	</div>
        <div class="form-group">
            <label for="parent_id"></label>
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
        </div>
        {{ Form::open(array('action' => 'CategoryController@edit', $category->category_id)) }}
            fsdf
        {{ Form::close() }}



    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop