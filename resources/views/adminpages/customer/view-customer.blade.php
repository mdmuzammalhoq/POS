@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">View Customer Detail Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">View Customer</li>
            </ol>
        </div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">View Customer Detail</h3></div>
                <div class="panel-body">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <p>{{ $customers->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <p>{{ $customers->email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <p>{{ $customers->phone }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <p>{{ $customers->address }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Experince</label>
                            <p>{{ $customers->shopname }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Name</label>
                            <p>{{ $customers->bank_name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Account Number</label>
                            <p>{{ $customers->bank_acc_number }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Branch</label>
                            <p>{{ $customers->bank_branch }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">NID No</label>
                            <p>{{ $customers->nid_no }}</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">city</label>
                            <p>{{ $customers->city }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label> <br>
                            <img style="width: 50px; height: 50px;" src="{{ URL::to( $customers->photo) }}" >
                            
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Back</button>
                   
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