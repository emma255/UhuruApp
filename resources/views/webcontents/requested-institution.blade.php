
@extends('layouts.app')
@section('contents')

@if(sizeof($institutions) == 0)
<br>
	<div class="alert alert-warning text-big">
		There is no loan institution that you meet their minimum qualification to get loan
	</div>
@else
@foreach ($institutions as $institution)

<div class="col-md-3">
    <div class="hover14 column">

        <div class="agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                            <a href="{{route('requestedInstituton',['id'=>$institution->id])}}">
                        <div class="snipcart-thumb">
                            <h1>{{$institution->organization_name}}</h1>
                            <p>{{$institution->extra_notes}} <span></span></p>
                        </div></a>
                    </div>
                </figure>
            </div>
        </div><br>
    </div>
</div>
@endforeach
@endif

@endsection