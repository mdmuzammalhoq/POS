@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Update Customer Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">Update Customer</li>
            </ol>
        </div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Update Customer Here</h3></div>
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
                    <form role="form" action="{{ url('update-customer/'.$edit->id) }}" method="POST" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$edit->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1"  value="{{$edit->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer Phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputPassword1"  value="{{$edit->phone}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1"  value="{{$edit->address}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Shop Name</label>
                            <input type="text" name="shopname" class="form-control" id="exampleInputPassword1"  value="{{$edit->shopname}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">bank name</label>
                            <input type="text" name="bank_name" class="form-control" id="exampleInputPassword1"  value="{{$edit->bank_name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bankank Account Number</label>
                            <input type="text" name="bank_acc_number" class="form-control" id="exampleInputPassword1"  value="{{$edit->bank_acc_number}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank Branch</label>
                            <input type="text" name="bank_branch" class="form-control" id="exampleInputPassword1"  value="{{$edit->bank_branch}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer NID No</label>
                            <input type="text" name="nid_no" class="form-control" id="exampleInputPassword1"  value="{{$edit->nid_no}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">city</label>
                            <input type="text" name="city" class="form-control" id="exampleInputPassword1"  value="{{$edit->city}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Image</label>
                            <img  id="image" src="#">
                            <input type="file" name="photo" accept="image/*" class="form-control" id="exampleInputPassword1" required onchange="readURL(this)" class="upload" placeholder="Experince">
                        </div>
                        <div class="form-group">
                            <img src="{{ URL::to($edit->photo) }}" alt="" style="width: 50px; height: 50px;" name="old_photo">
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update Customer</button>
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