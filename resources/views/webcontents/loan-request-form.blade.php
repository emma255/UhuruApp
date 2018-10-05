@extends('webcontents.index')
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">Request a Loan</div>
        <div class="panel-body">
            <form action="{{route('loanRequest')}}" method="post">
                @csrf
                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <br>
                        <div class="col-sm-4">
                            <label for="amount">Amount: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="number" step="any" id="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                name="amount" value="{{ old('amount') }}" required autofocus>@if ($errors->has('amount'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="row col-sm-6 form-group">
                        <br>
                        <div class="col-sm-6">
                            <label for="scale">Group / Individual: </label>
                        </div>
                        <div class="col-sm-6">
                            <select id="scale" class="custom-select col-sm-10 form-control{{ $errors->has('scale') ? ' is-invalid' : '' }}" name="scale"
                                value="{{ old('scale') }}" required autofocus>
                                <option value="">Select.....</option>
                                <option value="group">Group</option>
                                <option value="individual">Individual</option>
                            </select>
                                @if($errors->has('scale'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('scale') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="collateral">Collateral: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" id="collateral" class="form-control{{ $errors->has('collateral') ? ' is-invalid' : '' }}" name="collateral"
                                value="{{ old('collateral') }}" required autofocus> @if ($errors->has('collateral'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('collateral') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-6">
                            <label for="credit_value">Credit Value (%): </label><small>Maximum credit value</small>
                        </div>
                        <div class="col-sm-6">
                            <input type="number" step="any" id="credit_value" class="form-control{{ $errors->has('credit_value') ? ' is-invalid' : '' }}"
                                name="credit_value" value="{{ old('credit_value') }}" required autofocus>@if($errors->has('credit_value'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('credit_value') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Send Request">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection