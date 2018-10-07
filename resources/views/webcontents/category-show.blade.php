@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">Category Explanation</div>
        <div class="card-body">
            Category Name: {{$category->categoryname}} <br><br>
            Category Description: {{$category->description}}
        </div>
    </div>
</div>
@endsection