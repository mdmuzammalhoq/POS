@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">View Employee Detail Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">View Employee</li>
            </ol>
        </div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">View Employee Detail</h3></div>
                <div class="panel-body">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <p>{{ $single->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <p>{{ $single->email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <p>{{ $single->phone }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <p>{{ $single->address }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Experince</label>
                            <p>{{ $single->experience }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Salary</label>
                            <p>{{ $single->salary }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">NID No</label>
                            <p>{{ $single->nid_no }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Vacation</label>
                            <p>{{ $single->vacation }}</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">city</label>
                            <p>{{ $single->city }}</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label> <br>
                            <img style="width: 50px; height: 50px;" src="{{ URL::to( $single->photo) }}" >
                            
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