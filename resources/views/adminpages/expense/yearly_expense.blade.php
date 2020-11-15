@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">Monthly Expense</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">Monthly Expense</li>
</ol>
</div>
</div>
@php 
$year = date('Y');
$data = DB::table('expenses')->where('year', $year)->sum('amount');

@endphp

<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">

<h3 class="panel-title"><span class="btn btn-outline-success">{{ $year }}</span> Total Expense <a href="{{ route('add_expense') }}" class="btn btn-danger btn-sm pull-right">Add Expense</a> </h3>
</div>
<div class="panel-body">
<div class="row">
	<div class="col-md-2"></div>
<div class="col-md-8 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Expense Detail</th>
            <th>Amount</th>
            <th>Date</th>

        </tr>
    </thead>


    <tbody>
        @foreach($yearr as $row)
        <tr>
            <td>{{ $row->detail}}</td>
            <td>{{ $row->amount}}</td>
            <td>{{ $row->date}}</td>
            
           
        </tr>
       @endforeach
        
    </tbody>

</table>
<h4 style="color: #ff3939; text-align: center;">{{ $year }} Total Expense : {{ $data }}</h4>
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