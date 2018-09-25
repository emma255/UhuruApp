@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">Category Explanation</div>
        <div class="panel-body">
            Category Name: {{$category->categoryname}} <br><br>
            Category Description: {{$category->description}}
        </div>
    </div>
</div>
@endsection