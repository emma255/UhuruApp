@extends('layouts.app') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">Post Product</div>
        <div class="panel-body">
            <form action="{{route('productUpdate',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="name">Name: </label>
                        </div>
                        <div class="col-sm-12">
                        <input type="text" value="{{$product->name}}" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        </div>
                        <div class="col-sm-12">
                            <select class="form-control custom-select col-sm-10" id="category" name="category" style="height: 50%">
                            <option hidden>Choose category here.......</option>
							@foreach($categories = App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->categoryname}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="price">Price: </label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" value="{{$product->price}}" name="price" id="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="quantity">Quantity: </label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text"  value="{{$product->quantity}}" name="quantity" id="quantity" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="location">Place: </label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="location"  value="{{$product->location}}" id="location" class="form-control">
                        </div>
                    </div>
                    <div classheader="col-sm-6">
                        <div class="col-sm-12">
                            <label for="contacts">Contacts: </label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="contacts"  value="{{$product->contacts}}" id="contacts" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="col-sm-12 form-group">
                            <label for="from">Start date: </label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="date" name="from" value="{{$product->date_from}}" id="from" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-sm-12 form-group">
                            <label for="to">End date: </label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="date" value="{{$product->date_to}}" name="to" id="to" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <label for="image">Picture: </label>
                        </div>
                        <div class="col-sm-12">
                            <input type="file" value="{{$product->picture}}" name="image" id="image">
                        </div>
                    </div>
                    <div class="col-sm-2 form-group">
                        <label for="extra">Extra Info: </label>
                    </div>
                    <div class="col-sm-4 form-group">
                        <textarea name="extra" id="extra" rows="2" class="form-control">{{$product->extra_info}}</textarea>
                    </div>
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Update product">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection