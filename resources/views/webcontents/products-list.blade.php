@extends('layouts.app') 
@section('contents')

<div class="col-md-12 row">
    @foreach ($products as $product)
    <div class="col-md-2">
        <a href="{{route('productShow',['id'=>$product->id])}}">
            <img src="{{ asset('storage/'.$product->picture)}}" width="130px" height="130px" alt="{{$product->name}}" class="img-responsive">
            <p>{{$product->name}} ({{$product->quantity}})</p>
            <p>{{_('@')}}{{$product->price}} </p>
        </a>
    </div>
    @endforeach
</div>
@endsection