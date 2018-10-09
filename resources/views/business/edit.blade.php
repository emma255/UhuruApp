@extends('admin.index') 
@section('contents')

<div class="col-sm-12">
    <div class="panel panel-danger">
        <div class="panel-body">
        <form action="{{route('updateProcesses')}}" method="post">
                @csrf
                <label for="processes">Business registration processes:</label>
        <textarea name="processes" class="form-control form-group" id="processes" rows="15">{{$business->steps}}</textarea>

                <input type="submit" class="btn btn-primary btn-block" value="Update processes">
            </form>
        </div>
    </div>
    </form>
</div>
@endsection