@extends('layouts.app')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<h4 class="pull-left page-title">All Category Here !</h4>
<ol class="breadcrumb pull-right">
<li><a href="#">KE</a></li>
<li class="active">All Category</li>
</ol>
</div>
</div>
<div class="col-md-2"></div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">All Category</h3>
</div>
<div class="panel-body">
<div class="row">
	<div class="col-md-2"></div>
<div class="col-md-8 col-sm-12 col-xs-12">
<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
        @foreach($categories as $row)
        <tr>
            <td>{{ $row->cat_name}}</td>
            
            <td> 
                <a href="{{ URL::to('delete-employee/'.$row->id) }}"><i style="color: #ff0a0a;font-size: 16px;" class="fa fa-trash-o" id="delete"></i></a></td>
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