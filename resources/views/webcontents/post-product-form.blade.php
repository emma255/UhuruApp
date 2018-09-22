@extends('webcontents.index') 
@section('contents')

<div class="col-sm-12">
    <br>
    <div class="panel panel-default">
        <div class="panel-header col-sm-12">Post Product</div>
        <div class="panel-body">
        <form action="{{route('productStore')}}" method="post" class="form-group">

            @csrf
                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="name">Name: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2 input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select col-sm-10" id="category" name="category">
                            <option selected>Choose category here.......</option>
							@foreach($categories = App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->categoryname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="price">Price: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="quantity">Quantity: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="quantity" id="quantity" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="location">Place: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="contacts">Contacts: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="contacts" id="contacts" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="picture">Picture: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-3 form-group">
                        <label for="from">Start date: </label>
                    </div>
                    <div class="col-sm-9 form-group">
                        <input type="date" name="from" id="from" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-sm-12">
                    <div class="col-sm-3 form-group">
                        <label for="to">End date: </label>
                    </div>
                    <div class="col-sm-9 form-group">
                        <input type="date" name="to" id="to" class="form-control">
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-3 form-group">
                        <label for="extra">Extra Info: </label>
                    </div>
                    <div class="col-sm-9 form-group">
                        <textarea name="extra" id="extra" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Post product">
            </form>
        </div>
    </div>
</div>
@endsection