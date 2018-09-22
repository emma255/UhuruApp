@extends('webcontents.index') 
@section('contents')
<div class="col-md-3 top_brand_left">
    <div class="hover14 column">

        {{-- description here --}} 
        @foreach ($products as $product)
        <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset('images/offer.png')}}" alt=" " class="img-responsive" />
            </div>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="single.html"><img src="{{asset('images/2.png')}}" alt=" " class="img-responsive" /></a>
                            <p>{{$product->name}} soft drink (2 Ltr)</p>
                            <h4>$8.00 <span>$10.00</span></h4>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection