@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">Pay Salary</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">Pay Salary</li>
</ol>
</div>
</div>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Pay Salary <span class="pull-right">{{ date('F Y') }}</span></h3>

</div>

<div class="panel-body">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
    <thead>
        <tr>
            <th>Name</th>
            <th>Photo</th>
            <th>Salary</th>
            <th>Month</th>
            <th>Advance</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($employee as $row)
        <tr>
            <td>{{ $row->name}}</td>
            <td><img src="{{ $row->photo}}" style="height: 40px; width: 40px;"></td>
            <td>{{ $row->salary}}</td>
            <td><span class="badge badge-success">{{ date('F', strtotime("-1 month"))}}</span></td>
            <td></td>
           
            <td>


                <a href="{{ URL::to('delete-supplier/'.$row->id) }}"><button class="btn btn-war">Pay Now</button></a></td>
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