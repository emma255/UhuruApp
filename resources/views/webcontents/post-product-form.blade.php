@extends('layouts.app') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">Post Product</div>
        <div class="card-body">
            <form action="{{route('productStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <label for="name">Name: </label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-12 input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                            </div>
                            <div class="col-sm-12">
                                <select id="category" name="category" style="height: 50%" class="custom-select col-sm-10 form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required autofocus>

                                        @if ($errors->has('category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                        @endif
                            <option selected>Choose category here.......</option>
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
                                <input type="text" name="price" id="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <label for="quantity">Quantity: </label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="quantity" id="quantity" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <label for="location">Place: </label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="location" id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <label for="contacts">Contacts: </label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="contacts" id="contacts" class="form-control{{ $errors->has('contacts') ? ' is-invalid' : '' }}" name="contacts" value="{{ old('contacts') }}" required autofocus>

                                @if ($errors->has('contacts'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contacts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="col-sm-12 form-group">
                                <label for="from">Start date: </label>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="date" name="from" id="from" class="form-control{{ $errors->has('from') ? ' is-invalid' : '' }}" name="from" value="{{ old('from') }}" required autofocus>

                                @if ($errors->has('from'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('from') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12 form-group">
                                <label for="to">End date: </label>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="date" name="to" id="to" class="form-control{{ $errors->has('to') ? ' is-invalid' : '' }}" name="to" value="{{ old('to') }}" required autofocus>

                                @if ($errors->has('to'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <label for="image">Picture: </label>
                            </div>
                            <div class="col-sm-12">
                                <input type='file' name="image" id="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-2 form-group">
                            <label for="extra">Extra Info: </label>
                        </div>
                        <div class="col-sm-4 form-group">
                            <textarea name="extra" id="extra" rows="2" class="form-control{{ $errors->has('extra') ? ' is-invalid' : '' }}" name="extra" value="{{ old('extra') }}" required autofocus>

                                    @if ($errors->has('extra'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('extra') }}</strong>
                                        </span>
                                    @endif</textarea>
                        </div>
                    </div>
                    <div align="center">
                        <input type="submit" class="btn btn-primary" value="Post product">
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection