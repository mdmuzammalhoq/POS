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
<div>
    <a href="{{ route('january_expense') }}" class="btn btn-primary">January</a>
    <a href="{{ route('february_expense') }}" class="btn btn-success">February</a>
    <a href="{{ route('march_expense') }}" class="btn btn-danger">March</a>
    <a href="{{ route('april_expense') }}" class="btn btn-warning">April</a>
    <a href="{{ route('may_expense') }}" class="btn btn-success">May</a>
    <a href="{{ route('june_expense') }}" class="btn btn-danger">June</a>
    <a href="{{ route('july_expense') }}" class="btn btn-primary">July</a>
    <a href="{{ route('august_expense') }}" class="btn btn-info">August</a>
    <a href="{{ route('september_expense') }}" class="btn btn-warning">September</a>
    <a href="{{ route('october_expense') }}" class="btn btn-info">October</a>
    <a href="{{ route('november_expense') }}" class="btn btn-danger">November</a>
    <a href="{{ route('december_expense') }}" class="btn btn-success">December</a>
</div>


@php 
$month = date('F');
$data = DB::table('expenses')->where('month', $month)->sum('amount');

@endphp

<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">

<h3 class="panel-title"><span class="btn btn-outline-success">{{ $month }}</span> Month Expense <a href="{{ route('add_expense') }}" class="btn btn-danger btn-sm pull-right">Add Expense</a> </h3>
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
            <th>Month</th>

        </tr>
    </thead>


    <tbody>
        @foreach($expense as $row)
        <tr>
            <td>{{ $row->detail}}</td>
            <td>{{ $row->amount}}</td>
            <td>{{ $row->date}}</td>
            <td>{{ $row->month}}</td>
            
           
        </tr>
       @endforeach
        
    </tbody>

</table>
<h4 style="color: #ff3939; text-align: center;">{{ $month }} Total Expense : {{ $data }}</h4>
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