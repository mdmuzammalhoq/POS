@extends('layouts.app')

@section('content')
<div class="content-page">
                <!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">View Product Here !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">KE</a></li>
                <li class="active">View Product</li>
            </ol>
        </div>
    </div>


<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title">View Product</h3></div>
      <div class="container" >
       
          <fieldset>
          <div class="row form-group">
            <label class="col-md-1 control-label" for="mobile">Product Name</label>
            <div class="col-md-3">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input type="text" name="product_name" disabled="true" value="{{ $prod->product_name }}" class="form-control input-md ac_mobile" >
      
		
            </div>
			</div>

            <label class="col-md-1 control-label" for="mobile">Product Serial</label>
            <div class="col-md-2">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input type="number"  name="product_serial" disabled="true" value="{{ $prod->product_serial }}" class="form-control input-md ac_mobile" >
		
            </div>
			</div>


            <label class="col-md-1 control-label" for="mobile">Net Weight</label>
            <div class="col-md-3">
    		<div class="input-group">
    			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
			 <input name="net_wight" disabled="true" value="{{ $prod->net_weight }}" class="form-control input-md ac_mobile" type="text" >
		
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
              <select name="sup_id" class="form-control input-md">

                <option>{{ $prod->company}}</option>

              </select>
            </div>
		</div>
            

            <label class="col-md-1 control-label" > Category</label>
            <div class="col-md-2">
		<div class="input-group">
<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <select name="cat_id" class="form-control input-md">

                <option>{{ $prod->cat_name }}</option>

              </select>
            </div>
		</div>

            <label class="col-md-1 control-label" for="middle_name">Route</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <input name="product_route" disabled="true" value="{{ $prod->product_route }}" class="form-control input-md" type="text">
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Buying Date</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <input name="buying_date" disabled="true" value="{{ $prod->buying_date }}" class="form-control input-md" type="text">
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
              <input name="buying_price" disabled="true" value="{{ $prod->buying_price }}" class="form-control input-md ac_village" required="" type="text">
            </div> </div>

            <label class="col-md-1 control-label" for="state">Selling Price</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input name="selling_price" disabled="true" value="{{ $prod->selling_price }}" class="form-control input-md ac_state" required="" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="district">Offer Price</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input name="offer_price" disabled="true" value="{{ $prod->offer_price }}" class="form-control input-md ac_district" type="text">
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
                <option >{{ $prod->status }}</option>
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

              <input name="total_stock" disabled="true" value="{{ $prod->total_stock }}" class="form-control input-md ac_state" required="" type="text">
            </div>
        </div>
        	
            <label class="col-md-1 control-label">Godown</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input id="state" name="product_garage" disabled="true" value="{{ $prod->product_garage }}" class="form-control input-md ac_state" required="" type="text">
            </div></div>
            
          </div>

          <div class="row form-group">
            

            <label class="col-md-2 control-label" for="street_address">Product Description</label>
            <div class="col-md-5">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-pencil"></i>
			</span>
              <textarea class="form-control" name="detail" disabled="true"> {{ $prod->detail }}</textarea>
            </div>
	</div>
			<label class="col-md-3 control-label" for="other_taluka">Image &ensp;<img  id="image" src="{{URL::to($prod->product_image)}}" style="width: 50px; height: 50px;"></label>  
           
            <div class="col-md-2">
            </div>
          
          </div>


          <div class="form-group row">
            <div class="col-md-8 pull-right">
              <a href="{{route('all_product')}}"><button type="submit" class="btn btn-large btn-success"> Back to All Product</button></a>
              
            </div>
          </div>
          </fieldset>

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