@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">{{$training->title}} <small class="pull-right">{{$training->category}}</small> </div>
        <div class="card-body">
            <div class="col-sm-12">
                <p>
                    <section class="form-group">
                        {{$training->body}}
                    </section>
                    <div class="row form-row form-group" align="center">
                        <a href="{{route('editTraining',['id'=>$training->id])}}"><button class="btn btn-warning pull-left">Edit {{$training->title}}</button></a>
                        <a href="{{route('deleteTraining',['id'=>$training->id])}}"><button class="btn btn-danger pull-right">Delete {{$training->title}}</button></a>
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection