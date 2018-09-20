@extends('webcontents.index')

@section('contents')
    <div class="col-md-3 top_brand_left">
    <div class="hover14 column">
        <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset('images/offer.png')}}" alt=" " class="img-responsive" />
            </div>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="single.html"><img src="{{asset('images/2.png')}}" alt=" " class="img-responsive" /></a>
                            <p>Pepsi soft drink (2 Ltr)</p>
                            <h4>$8.00 <span>$10.00</span></h4>
                        </div>
                        <div class="snipcart-details top_brand_home_details">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                    <input type="hidden" name="amount" value="8.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
@endsection