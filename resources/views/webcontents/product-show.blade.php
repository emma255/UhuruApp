@extends('webcontents.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">{{$product->name }} Stock Explanation</div>
        <div class="panel-body">
            <div class="col-md-4">
                <img src="{{ asset('storage/'.$product->picture)}}" alt="{{$product->name}}" class="img-responsive">
            </div>
            <div class="col-md-7">
                {{$product->name}} <br> Quantity Available: ({{$product->quantity}}) <br> {{_('Price per unit: ')}}{{$product->price}}
                <br> Stock valid from {{$product->date_from}} to {{$product->date_to}} <br> Location available: {{$product->location}}
                <br> Contacts details: {{$product->contacts}} <br>
                <span></span>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
@endsection