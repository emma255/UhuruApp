@extends('admin.index') 
@section('contents')

<div class="col-sm-12 margin-top">
    <div class="panel panel-danger">
        <div class="panel-heading col-sm-12">Products</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Quantity</th>
                        <th>Price per unit</th>
                        <th>Valid from</th>
                        <th>Valid to</th>
                        <th>Location</th>
                        <th>Contacts</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr>
                        <td><a href="{{route('productShow',['id'=>$product->id])}}" class="text-black">{{$product->name}}</a></td>
                        <td>{{$product->category_id}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->date_from}}</td>
                        <td>{{$product->date_to}}</td>
                        <td>{{$product->location}}</td>
                        <td>{{$product->contacts}}</td>
                        <td>
                            <a href="{{route('productEdit',['id'=>$product->id])}}"><button class="btn btn-alert">Edit</button></a>
                            <a href="{{route('productDelete',['id'=>$product->id])}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Quantity</th>
                        <th>Price per unit</th>
                        <th>Valid from</th>
                        <th>Valid to</th>
                        <th>Location</th>
                        <th>Contacts</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection