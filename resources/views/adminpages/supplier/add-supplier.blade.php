@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Add Supplier Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">Add Supplier</li>
            </ol>
        </div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Add Supplier Here</h3></div>
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
                    <form role="form" action="{{ url('insert-supplier') }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Supplier Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Supplier Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Supplier Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Supplier Address" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Company</label>
                            <input type="text" name="company" class="form-control" id="exampleInputPassword1" placeholder="Supplier Company" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Type</label>
                            <select name="type" class="form-control">
                            	<option value="1">Distributor</option>
                            	<option value="2">Whole Saller</option>
                            	<option value="3">Broschure</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Account Holder Name</label>
                            <input type="text" name="account_holder" class="form-control" id="exampleInputPassword1" placeholder="Account Holder name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" id="exampleInputPassword1" placeholder="bank name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Account Number</label>
                            <input type="text" name="bank_acc_number" class="form-control" id="exampleInputPassword1" placeholder="bank_acc_number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Branch Name</label>
                            <input type="text" name="branch_name" class="form-control" id="exampleInputPassword1" placeholder="bank branch" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">city</label>
                            <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="city" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label>
                            <img  id="image" src="#">
                            <input type="file" name="photo" accept="image/*" class="form-control" id="exampleInputPassword1" required onchange="readURL(this)" class="upload" placeholder="Experince">
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Add Supplier</button>
                    </form>
                </div> <!-- panel-body-->

                
            </div> 
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