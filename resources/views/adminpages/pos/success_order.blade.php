@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">All Success Orders Here !</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">All Success Orders</li>
</ol>
</div>
</div>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">All Success Orders</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Quantity</th>
            
            <th>Total</th>
            <th>Payment Status</th>
            <th>Paid</th>
            <th>Due</th>
            <th>Vat</th>
            <th>Order Status</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($success as $row)
        <tr>
            <td>{{ $row->name}}</td>
            <td>{{ $row->order_date}}</td>
            <td>{{ $row->total_products}}</td>
            <td>{{ $row->total}}</td>
            <td>{{ $row->payment_status}}</td>
            <td>{{ $row->pay}}</td>
            <td>{{ $row->due}}</td>
            <td>{{ Cart::tax() }}</td>
            <td><span class="badge badge-success">{{ $row->order_status}}</span></td>
           

            <td>
                <a href="{{ URL::to('view-order-status/'.$row->id) }}"><button class="btn btn-primary btn-sm">View</button></i></a> &ensp;


                
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