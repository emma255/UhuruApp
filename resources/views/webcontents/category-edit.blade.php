@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">Update Product Category</div>
        <div class="card-body">
            <form action="{{route('updateCategory',['id'=>$category->id])}}" method="post">

                @csrf
                <div class="form-group row col-sm-12 margin-top">
                    <br>
                    <div class="col-sm-4">
                        <label for="categoryname">Category Name: </label>
                    </div>
                    <div class="col-sm-8">
                    <input type="text" value="{{$category->categoryname}}" class="form-control{{ $errors->has('categoryname') ? ' is-invalid' : '' }}" name="categoryname" value="{{ old('categoryname') }}" required autofocus>

                        @if ($errors->has('categoryname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('categoryname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row col-md-12 form-group">
                    <div class="col-sm-4 form-group">
                        <label for="description">Category Description: </label>
                    </div>
                    <div class="col-sm-8 form-group">
                        <textarea id="description" placeholder="Add product description here" 
                        rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" 
                        name="description" value="{{ old('description') }}" required autofocus>{{$category->description}}
                    </textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Update Category">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection