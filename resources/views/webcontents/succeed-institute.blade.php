@extends('layouts.app')
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">{{$institute->organization_name}}</div>
        <div class="card-body">
        	<div class="col-sm-12" align="center">
            	<h3>{{$institute->organization_name}}</h3><br>
        	</div>
            <div class="col-md-6">
            	@if($institute->extra_notes != null)
            	<p><i class="fa fa-star"></i>
            		{{$institute->extra_notes}}
            	</p>
            	@endif
            	<p><i class="fa fa-star"></i>Also we offer loan up to {{$institute->minimum_amount}}</p>
            		@if($institute->scale != 'both')
            			<p><i class="fa fa-star"></i>We offer the loans to only {{$institute->scale}}</p>
            		@else
            			<p><i class="fa fa-star"></i>We offer the loans to both Individuals and groups</p>
            		@endif
            </div>
            <div class="col-md-6">
            	<p><i class="fa fa-star"></i>
            		We accept this collaterals: {{$institute->collateral}} <br><i class="fa fa-star"></i>
            		We offers the loan with the credit of: {{$institute->credit_value}}%
            	</p>
            	<p>
            	<i class="fa fa-star"></i> Contacts:
            	{{$institute->contacts}}
            	</p>
            </div>
        </div>
    </div>
</div>
@endsection
