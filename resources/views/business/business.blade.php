@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-body form-group">
            @if (isset($message)) No business registration processes added @else {{$processes->steps}}
            <div class="col-md-12" align="center"><hr>
                <a href="{{route('deleteProcesses',['id'=>$processes->id])}}">
                    <button class="btn btn-danger">Delete this steps</button>
                </a>
                <a href="{{route('editProcesses',['id'=>$processes->id])}}">
                    <button class="btn btn-warning">Edit this steps</button>
                </a>
            </div>
            @endif
        </div>
    </div>
    </form>
</div>
@endsection