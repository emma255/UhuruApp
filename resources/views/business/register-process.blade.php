@extends('layouts.app') 
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header col-sm-12">Business registration processes.</div>
                <div class="card-body">
                    <p>
                        {{isset($message)?'No business registration processes added' : $processes->steps}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection