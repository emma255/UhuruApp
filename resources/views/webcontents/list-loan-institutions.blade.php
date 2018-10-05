@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">Loan Institutions</div>
        <div class="panel-body">
            <div class="col-md-12">
            <a href="{{ route('addInstitution')}}"><button class="btn btn-success">Add Institution</button></a>
            </div>
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Institution Name</th>
                        <th>Collateral</th>
                        <th>Credit value</th>
                        <th>Minimum Amount</th>
                        <th>Group / Individual</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($institutions as $institution)

                    <tr>
                        <td><a href="{{route('showInstitution',['id'=>$institution->id])}}" class="text-black">{{$institution->organization_name}}</a></td>
                        <td>{{$institution->collateral}}</td>
                        <td>{{$institution->credit_value}}</td>
                        <td>{{$institution->minimum_amount}}</td>
                        <td>{{$institution->scale}}</td>
                        <td>
                            <a href="{{route('editInstitution',['id'=>$institution->id])}}"><button class="btn btn-alert">Edit</button></a>
                            <a href="{{route('deleteInstitution',['id'=>$institution->id])}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Institution Name</th>
                        <th>Collateral</th>
                        <th>Credit value</th>
                        <th>Minimum Amount</th>
                        <th>Group / Individual</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection