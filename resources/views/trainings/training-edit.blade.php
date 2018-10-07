@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12 form-group">Edit Training</div>
        <div class="card-body">
            <form action="{{route('updateTraining', ['id'=>$training->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8 form-group">
                        <div class="col-md-3">
                            <label for="title">Title of the training:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$training->title}}" name="title" id="title" placeholder="Title of the training"
                                required autofocus>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <div class="col-md-3">
                            <label for="category">
                                <label for="category">
                                    Category:
                                </label>
                            </label>
                        </div>
                        <div class="col-md-9">

                            <select id="category" class="custom-select col-sm-10 form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category"
                                value="{{ old('category') }}" required autofocus>
                                <option selected value="{{$training->category}}">Choose category here...</option>
                                    <option value="sales">Sales</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="finance">Finance</option>
                                    <option value="investments">Investments</option>
                                    <option value="other resources">Other resources</option>
                                </select> @if($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('category') }}</strong>
                            </span>@endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="body">
                            Body
                    </label>
                    <textarea class="form-control" rows="8" name="body" id="body" placeholder="Trainig body" required>
                        {{$training->body}}
                    </textarea>
                </div>
                <div class="box-footer clearfix" align="center">
                    <input type="submit" class="btn btn-primary" value="Update training">
                </div>
            </form>
        </div>
    </div>
    </form>
</div>
@endsection