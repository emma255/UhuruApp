@extends('webcontents.index') 
@section('contents')

@foreach ($products as $product)

<div class="col-md-3">
    <div class="hover14 column">

        {{-- description here --}} 
        <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset('images/offer.png')}}" alt=" " class="img-responsive" />
            </div>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                            <a href="{{route('productShow',['id'=>$product->id])}}">
                        <div class="snipcart-thumb">
                            <img src="{{asset('images/2.png')}}" alt=" " class="img-responsive">
                            <p>{{$product->name}} ({{$product->quantity}})</p>
                            <p>{{_('@')}}{{$product->price}} <span></span></p>
                        </div></a>
                    </div>
                </figure>
            </div>
        </div><br>
    </div>
</div>
@endforeach
@endsection