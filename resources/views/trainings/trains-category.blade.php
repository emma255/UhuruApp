@extends('layouts.app') 
@section('contents')

<div class="container">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <p>
                        <ol>
                            @foreach ($trains as $train)
                            <li>
                                <a href="{{route('train',['id' => $train->id])}}">{{$train->title}} by {{$train->posted_by}}, date {{$train->created_at}} </a>
                            </li>
                            @endforeach
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection