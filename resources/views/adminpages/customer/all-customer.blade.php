@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">All Customer Here !</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">All Customer</li>
</ol>
</div>
</div>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">All Customer</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Image</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($customers as $row)
        <tr>
            <td>{{ $row->name}}</td>
            <td>{{ $row->email}}</td>
            <td>{{ $row->phone}}</td>
            <td>{{ $row->address}}</td>
            <td><img src="{{ $row->photo}}" style="height: 40px; width: 40px;"></td>
            <td>{{ $row->city}}</td>
            <td> <a href="{{ URL::to('view-customer/'.$row->id) }}"><i style="color: #317eeb;font-size: 16px;" class="fa fa-th"></i></a> &ensp;

                <a href="{{ URL::to('edit-customer/'.$row->id) }}"><i style="color: #217f16;    font-size: 16px;" class="fa fa-pencil"></i></a> &ensp;


                <a href="{{ URL::to('delete-customer/'.$row->id) }}"><i style="color: #ff0a0a;font-size: 16px;" class="fa fa-trash-o" id="delete"></i></a></td>
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