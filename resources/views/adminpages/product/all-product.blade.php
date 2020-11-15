@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">All Products Here !</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">All Products</li>
</ol>
</div>
</div>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">All Products</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Serial No</th>
            <th>Product Name</th>
            <th>Godown Name</th>
            <th>Route</th>
            <th>Buying Date</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th>Offer Price</th>
            <th>Net Weight</th>
            <th>Image</th>
            <th>Status</th>
            <th>Total Stock</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($products as $row)
        <tr>
            <td>{{ $row->product_serial}}</td>
            <td>{{ $row->product_name}}</td>
            <td>{{ $row->product_garage}}</td>
            <td>{{ $row->product_route}}</td>
            <td>{{ $row->buying_date}}</td>
            <td>{{ $row->buying_price}}</td>
            <td>{{ $row->selling_price}}</td>
            <td>{{ $row->offer_price}}</td>
            <td>{{ $row->net_weight}}</td>
            <td><img src="{{ $row->product_image}}" style="height: 40px; width: 40px;"></td>
            <td>{{ $row->status}}</td>
            <td>{{ $row->total_stock}}</td>

            <td> <a href="{{ URL::to('view-product/'.$row->id) }}"><i style="color: #317eeb;font-size: 16px;" class="fa fa-th"></i></a> &ensp;

                <a href="{{ URL::to('edit-product/'.$row->id) }}"><i style="color: #217f16;    font-size: 16px;" class="fa fa-pencil"></i></a> &ensp;


                <a href="{{ URL::to('delete-product/'.$row->id) }}"><i style="color: #ff0a0a;font-size: 16px;" class="fa fa-trash-o" id="delete"></i></a></td>
        </tr>
       @endforeach
        
    </tbody>
</table>

</div>
</div>
</div>
</div>
</div>

</div> <!-- End Row -->

</div>
</div>
</div>

@endsection