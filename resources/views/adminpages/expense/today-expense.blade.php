@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">Expense Today</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">Expense Today</li>
</ol>
</div>
</div>
@php 
$today = date('d-m-Y');
$data = DB::table('expenses')->where('date', $today)->sum('amount');

@endphp
<h4 style="text-align: center;color: #f10b0b;font-weight: 700;">Total expense Today : {{ $data }} Taka</h4>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">

<h3 class="panel-title">Expense Today <a href="{{ route('add_expense') }}" class="btn btn-danger btn-sm pull-right">Add Expense</a> </h3>
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
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($date as $row)
        <tr>
            <td>{{ $row->detail}}</td>
            <td>{{ $row->amount}}</td>
            <td>{{ $row->date}}</td>
            
            <td> 
                <a href="{{ URL::to('edit-todayExpense/'.$row->id) }}" class="btn btn-success btn-sm"> Edit</a></td>
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