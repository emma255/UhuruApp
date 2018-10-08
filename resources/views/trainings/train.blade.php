@extends('layouts.app') 
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header col-sm-12">{{$train->title}} <small class="pull-right">{{$train->category}}</small> </div>
                <div class="card-body">
                    <p>
                        <section class="form-group">
                            {{$train->body}}
                        </section>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection