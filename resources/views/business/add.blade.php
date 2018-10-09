@extends('admin.index') 
@section('contents')

<div class="col-sm-12">
    <div class="panel panel-danger">
        <div class="panel-body">
        <form action="{{route('saveProcesses')}}" method="post">
                @csrf
                <label for="processes">Business registration processes:</label>
                <textarea name="processes" class="form-control form-group" id="processes" rows="10"></textarea>

                <input type="submit" class="btn btn-primary btn-block" value="Add processes">
            </form>
        </div>
    </div>
    </form>
</div>
@endsection