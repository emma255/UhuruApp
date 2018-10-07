@extends('admin.index')
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="card card-danger">
        <div class="card-header col-sm-12">Add Loan Organization</div>
        <div class="card-body">
            <form action="{{route('storeInstitution')}}" method="post">
                @csrf
                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <br>
                        <div class="col-sm-4">
                            <label for="organization_name">Organization Name: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control{{ $errors->has('organization_name') ? ' is-invalid' : '' }}" name="organization_name"
                                value="{{ old('organization_name') }}" required autofocus> @if ($errors->has('organization_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('organization_name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="row col-sm-6 form-group">
                        <br>
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
                </div>
                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="credit_value">Credit Value: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="number" step="any" id="credit_value" class="form-control{{ $errors->has('credit_value') ? ' is-invalid' : '' }}" name="credit_value"
                                value="{{ old('credit_value') }}" required autofocus> @if ($errors->has('credit_value'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('credit_value') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="minimum_amount">Minimum Amount: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="number" step="any" id="minimum_amount" class="form-control{{ $errors->has('minimum_amount') ? ' is-invalid' : '' }}" name="minimum_amount"
                                value="{{ old('minimum_amount') }}" required autofocus> @if ($errors->has('minimum_amount'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('minimum_amount') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="scale">Number of People: </label>
                        </div>
                        <div class="col-sm-8">
                            <select id="scale" class="custom-select col-sm-10 form-control{{ $errors->has('scale') ? ' is-invalid' : '' }}" name="scale"
                                value="{{ old('scale') }}" required autofocus>
                                <option value="">Select.....</option>
                                <option value="individual">Individual</option>
                                <option value="group">Group</option>
                                <option value="both">Both</option>
                            </select>
                                @if($errors->has('scale'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('scale') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="extra">Extra Note: </label>
                        </div>
                        <div class="col-sm-8">
                            <textarea id="extra" rows="2" class="form-control{{ $errors->has('extra') ? ' is-invalid' : '' }}" name="extra" value="{{ old('extra') }}"
                                required autofocus></textarea> @if ($errors->has('extra'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('extra') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row col-sm-6 form-group">
                        <div class="col-sm-4">
                            <label for="contacts">Contacts / Address: </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" id="contacts" class="form-control{{ $errors->has('contacts') ? ' is-invalid' : '' }}" name="contacts" value="{{ old('contacts') }}"
                                required autofocus> @if ($errors->has('contacts'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('contacts') }}</strong>
                                </span> @endif
                        </div>
                    </div>
                </div>
                <div align="center">
                    <input type="submit" class="btn btn-primary" value="Add Institution">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection