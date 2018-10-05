@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
    <div class="panel-heading col-sm-12 form-group">Trainings}}</div>
        <div class="panel-body">
            <div class="col-md-12 form-group">
            <a href="{{ route('addTraining')}}"><button class="btn btn-success">Add Trainings</button></a>
            </div>
            <table class="table table-bordered table-responsive table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Training Title</th>
                        <th>Category</th>
                        <th>Posted by</th>
                        <th>Posted on</th>
                        <th>Last updated by</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainings as $training)

                    <tr>
                        <td><a href="{{route('showTraining',['id'=>$training->id])}}" class="text-black">{{$training->title}}</a></td>
                        <td>{{$training->category}}</td>
                        <td>{{$training->posted_by}}</td>
                        <td>{{date_format($training->created_at,' M Y')}}</td>
                        <td>{{$training->last_updated_by}}({{$training->created_at->diffForHumans()}})</td>
                        <td>
                            <a href="{{route('editTraining',['id'=>$training->id])}}"><button class="btn btn-alert">Edit</button></a>
                            <a href="{{route('deleteTraining',['id'=>$training->id])}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Training Title</th>
                        <th>Category</th>
                        <th>Posted by</th>
                        <th>Last updated by</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection