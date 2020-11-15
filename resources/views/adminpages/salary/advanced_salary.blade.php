@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title"> Salary Provide !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active"> Salary Provide</li>
            </ol>

        </div>

    </div>
    <div class="col-md-2"></div>
<div class="col-md-8 card">
	<a href="{{route('all_advance_salary')}}"><button class="btn btn-success pull-right">All Advance </button></a> <br> <hr>
            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="panel-title text-white">Advanced Salary Provide</h3> 
                	</div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="panel-body">
                    <form role="form" action="{{ url('insert-advancesalary') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Employee</label>
                            @php 
                            	$emp = DB::table('employees')->get();
                            @endphp
                            <select name="emp_id" class="form-control border-primary">
                            	<option disabled selected="">Select employee</option>
                            	@foreach($emp as $row)
                            	<option value="{{  $row->id }}">{{  $row->name }}</option>
                            	@endforeach
                            	
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Month</label>
                            <select name="month" class="form-control">
                            	<option value="January">January</option>
                            	<option value="February">February</option>
                            	<option value="March">March</option>
                            	<option value="April">April</option>
                            	<option value="May">May</option>
                            	<option value="June">June</option>
                            	<option value="July">July</option>
                            	<option value="August">August</option>
                            	<option value="September">September</option>
                            	<option value="October">October</option>
                            	<option value="November">November</option>
                            	<option value="December">December</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Advanced Salary</label>
                            <input type="text" name="advanced_salary" class="form-control" id="exampleInputPassword1" placeholder="Advanced Salary Amount" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Year</label>
                            <input type="text" name="year" class="form-control border-primary shadow rounded" id="exampleInputPassword1" placeholder="Year" required>
                        </div>
                       

                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->

    </div>
</div>
</div>

<script type="text/javascript">
	function readURL(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#image')
					.attr('src', e.target.result)
					.width(50)
					.height(50);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@endsection