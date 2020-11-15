@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Add Product Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">Add Product</li>
            </ol>
        </div>
    </div>


<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title">Add Product</h3></div>
					@if($errors->any())
	                    <div class="alert alert-danger">
	                        <ul>
	                            @foreach($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                            @endforeach
	                        </ul>
	                    </div>
                    @endif
      <div class="container" >
        <form role="form" action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <fieldset>
          <div class="row form-group">
            <label class="col-md-1 control-label" for="mobile">Product Name</label>
            <div class="col-md-3">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input type="text" name="product_name" placeholder="Product Name" class="form-control input-md ac_mobile" >
		
            </div>
			</div>

            <label class="col-md-1 control-label" for="mobile">Product Serial</label>
            <div class="col-md-2">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input type="number" name="product_serial" placeholder="Product Serial" class="form-control input-md ac_mobile" >
		
            </div>
			</div>


            <label class="col-md-1 control-label" for="mobile">Net Weight</label>
            <div class="col-md-3">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input name="net_weight" placeholder="Net Weight / quantity" class="form-control input-md ac_mobile" type="text" >
		
            </div>
			</div>
            
            
          </div>

          <div class="row form-group">
            <div class="col-md-8" id="mobile_numbers"></div>
          </div>

          <div class="row form-group">

            <label class="col-md-1 control-label" for="sms"> Supplier</label>
            <div class="col-md-2">
		<div class="input-group">
<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

			@php 
				$sup = DB::table('suppliers')->get();
			@endphp
              <select name="sup_id" class="form-control input-md">
              	@foreach($sup as $row)
                <option value="{{ $row->id}}">{{ $row->company}}</option>
                @endforeach
              </select>
            </div>
		</div>
            

            <label class="col-md-1 control-label" > Category</label>
            <div class="col-md-2">
		<div class="input-group">
<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

			@php 
				$cat = DB::table('categories')->get();
			@endphp
              <select name="cat_id" class="form-control input-md">
              	@foreach($cat as $row)
                <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                @endforeach
              </select>
            </div>
		</div>

            <label class="col-md-1 control-label" for="middle_name">Route</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <input name="product_route" placeholder="Product Route" class="form-control input-md" type="text">
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Buying Date</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <input name="buying_date" placeholder="Buying Date" class="form-control input-md" type="text">
            </div>
	</div>
		
          </div>

          <div class="row form-group">
            <label class="col-md-1 control-label" for="village">Buying Price</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <input name="buying_price" placeholder="Buying Price" class="form-control input-md ac_village" required="" type="text">
            </div> </div>

            <label class="col-md-1 control-label" for="state">Selling Price</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input name="selling_price" placeholder="Selling Price" class="form-control input-md ac_state" required="" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="district">Offer Price</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input name="offer_price" placeholder="offer price" class="form-control input-md ac_district" type="text">
            </div>
		</div>
		
          </div>
           <label class="col-md-1 control-label" for="sms"> Status</label>
            <div class="col-md-3">
		<div class="input-group">
<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select name="status" class="form-control input-md">
                <option value="SPECIAL OFFER">SPECIAL OFFER</option>
                <option value="BEST SELLERS">BEST SELLERS</option>
                <option value="FEATURED">FEATURED</option>
                <option value="SALES">SALES</option>
              </select>
            </div>
		</div>
          <div class="row form-group">
           <label class="col-md-1 control-label" for="state">Total Stock</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input name="total_stock" placeholder="Total Stock" class="form-control input-md ac_state" required="" type="text">
            </div>
        </div>
        	
            <label class="col-md-1 control-label">Godown</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input id="state" name="product_garage" placeholder="Godown Name" class="form-control input-md ac_state" required="" type="text">
            </div></div>
            
          </div>

          <div class="row form-group">
            

            <label class="col-md-2 control-label" for="street_address">Product Description</label>
            <div class="col-md-5">
          		<div class="input-group">
          			<span class="input-group-addon">
          			<i class="glyphicon glyphicon-pencil"></i>
          			</span>
                        <textarea class="form-control" name="detail" placeholder="Description..."></textarea>
              </div>
          	</div>
			<label class="col-md-1 control-label" for="other_taluka">Image</label>  
           <img  id="image" src="#">
            <div class="col-md-2">
             <input type="file" name="product_image" accept="image/*" class="form-control" id="exampleInputPassword1" required onchange="readURL(this)" class="upload" placeholder="Experince">
            </div>
          
          </div>


          <div class="form-group row">
            <div class="col-md-8 pull-right">
              <button type="submit" class="btn btn-large btn-success"> Save Product Information</button>
              <button class="btn btn-large btn-danger" type="button" onclick=history.go(-1)> Cancel </button>
            </div>
          </div>
          </fieldset>
        </form>
      </div>


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