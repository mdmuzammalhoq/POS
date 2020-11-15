@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">View Supplier Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">View Supplier</li>
            </ol>
        </div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">View Supplier Here</h3></div>
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
                            <p>{{ $suppl->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Email</label>
                            <p>{{ $suppl->email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Phone</label>
                            <p>{{ $suppl->phone }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Address</label>
                            <p>{{ $suppl->address }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Company</label>
                            <p>{{ $suppl->company }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier Type</label>
                            <p>{{ $suppl->type }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Account Holder Name</label>
                            <p>{{ $suppl->account_holder }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Name</label>
                            <p>{{ $suppl->bank_name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Account Number</label>
                            <p>{{ $suppl->bank_acc_number }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Branch Name</label>
                            <p>{{ $suppl->branch_name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">city</label>
                           <p>{{ $suppl->city }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label>
                            <img style="width: 50px; height: 50px;" src="{{ URL::to( $suppl->photo) }}" >
                            
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Back</button>
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