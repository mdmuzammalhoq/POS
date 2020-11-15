@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title"> Update Expense !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">  Update Expense </li>
            </ol>

        </div>

    </div>
    <div class="col-md-2"></div>
<div class="col-md-8 card">

            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="panel-title text-white"> Update Expense 
                    <a href="{{ route('expense_today') }}" class="btn btn-danger btn-sm pull-right">Today</a> 
                    <a href="" class="btn btn-warning btn-sm pull-right">This month</a></h3> </div>
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
                    <form role="form" action="{{ url('update-todayExpense/'.$edit->id) }}" method="POST">
                    	@csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Expense Detail</label>
                        <textarea name="detail" class="form-control" >{{ $edit->detail }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input type="text" name="amount" class="form-control" id="exampleInputPassword1" value="{{ $edit->amount }}" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="date" class="form-control" value="{{ date('d-m-Y') }}" >
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="month" class="form-control" value="{{ date('F') }}" >
                            <input type="hidden" name="year" class="form-control" value="{{ date('Y') }}" >

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