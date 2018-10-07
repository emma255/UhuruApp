@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">Product Categories</div>
        <div class="card-body">
        <a href="{{route('addCategory')}}"><button class="btn btn-primary">Add Category</button></a>
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        {{-- <th>Category Description</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('showCategory',['id'=>$category->id])}}" class="text-black">{{$category->categoryname}}</a></td>
                    {{-- <td>{{$category->description}}</td> --}}
                    <td>
                    <a href="{{route('editCategory',['id'=>$category->id])}}"><button class="btn btn-alert">Edit</button></a>
                    <a href="{{route('deleteCategory',['id'=>$category->id])}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        {{-- <th>Category Description</th> --}}
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection