@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card col-sm-12">{{$trains->title}} <small class="pull-right">{{$trains->category}}</small> </div>
        <div class="card-body">
                <p>
                    <section class="form-group">
                        {{$trains->body}}
                    </section>
                    <div class="row form-row form-group" align="center">
                        <a href="{{route('edittrains',['id'=>$trains->id])}}"><button class="btn btn-warning pull-left">Edit {{$trains->title}}</button></a>
                        <a href="{{route('deletetrains',['id'=>$trains->id])}}"><button class="btn btn-danger pull-right">Delete {{$trains->title}}</button></a>
                    </div>
                </p>
        </div>
    </div>
@endsection