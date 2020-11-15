@extends('layouts.app')

@section('content')                     
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12 bg-info">
                    <h4 class="pull-left page-title text-white"> Point Of Sale (POS)</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#" class="text-white">Kopotakkho Ent.</a></li>
                        <li class="text-white">{{ date('d-m-Y')}}</li>
                    </ol>
                </div>
            </div><br>

<div class="row pull-right">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="portfolioFilter">
        	@foreach($category as $row)
            <a href="#" class="btn btn-sm btn-danger">{{ $row->cat_name}}</a>
            @endforeach
        </div>
    </div>
</div>


<div class="row">

	
		<div class="col-lg-5">
<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="price_card text-center">
        
        <ul class="price-features">
            <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col" class="text-white">Name</th>
      <th scope="col" class="text-white">Qty</th>
      <th scope="col" class="text-white">Price</th>
      <th scope="col" class="text-white">Sub Total</th>
      <th scope="col" class="text-white">Action</th>
    </tr>
  </thead>
  <tbody>

@php 
	$prod = Cart::content();
@endphp

@foreach($prod as $pr)
    <tr class="list-group-flush">

      <td>{{ $pr->name }}</td>
      <td>
      	<form action="{{ url('/update-cart/'.$pr->rowId) }}" method="POST">
      		@csrf
      	<input type="number" name="qty" style="width: 50px;" value="{{ $pr->qty }}">
      	<button type="submit"><i class="md-done-all"></i></button>
      	</form>
      </td>
      <td>{{ $pr->price }}</td>
      <td>{{ $pr->price*$pr->qty }}</td>
      <td><a href="{{ url('/remove-cart/'.$pr->rowId) }}"><i class="md-delete text-danger"></i></a></td>
    </tr>
@endforeach


   
    
  </tbody>
</table>
           
        </ul>
       <div class="pricing-footer bg-primary">
            <p>Quantity : {{ Cart::count() }}</p>
            <p>Sub Total : {{ Cart::subtotal() }}</p>
            <p>vat : {{ Cart::tax() }}</p>
            <hr>
            <h4 class="text-white">Total : {{ Cart::total() }}</h4>
        </div>
<form action="{{ url('/create-invoice') }}" method="POST">
	@csrf
					<div class="panel">
						@if($errors->any())
	                    <div class="alert alert-danger">
	                        <ul>
	                            @foreach($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                            @endforeach
	                        </ul>
	                    </div>
                    	@endif
						<h4 class="text-info ">Customers
							<a href="" class="btn btn-sm btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Add New</a>
						</h4>
						@php 
							$customer = DB::table('customers')->get();
						@endphp
						<select name="cus_id" class="form-control">
							<option disabled="" selected="">Select Customer</option>
							@foreach($customer as $row)
							<option value="{{ $row->id }}">{{ $row->name}}</option>
							
							@endforeach
						</select>
					</div>

        <button type="submit" name="submit" class="btn btn-primary btn-sm">Create Invoice</button>
</form>
    </div> <!-- end Pricing_card -->
</div>
		</div>

		<div class="col-lg-7">
			<div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        	<div class="row">

                        	<div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>

                        	<div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div>
                        </div>

                        <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                            <thead>
                                <tr role="row">

                                	<th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Serial</th>

                                	<th class="sorting_asc text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Image</th>

                                	<th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Product Name</th>
                                	<th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Net Weight</th>

                                	<th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Category</th>
                                	<th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Order</th>

                                	

                                </tr>
                            </thead>

                     
                            <tbody>
@foreach($product as $row)
                            	<tr role="row" class="odd">

                            		<form action="{{ url('/add-cart') }}" method="POST">
                            			@csrf

                            			<input type="hidden" name="id" value="{{ $row->id }}">
                            			<input type="hidden" name="name" value="{{ $row->product_name }}">
                            			<input type="hidden" name="qty" value="1">
                            			<input type="hidden" name="price" value="{{ $row->selling_price }}">
                            			<input type="hidden" name="weight" value="{{ $row->net_weight }}">


                                    <td class="sorting_1 text-center" class="text-center">{{ $row->product_serial}}</td>
                                    <td class="text-center"><img src="{{ $row->product_image}}" style="width: 40px; height: 40px;"></td>
                                    <td class="text-center">{{ $row->product_name}}</td>
                                    <td class="text-center">{{ $row->cat_name}}</td>
                                    <td class="text-center"><button type="submit" class="btn btn-sm btn-info"><i style="font-size: 29px; color: #fff;" class="md-add-box"></i></button></td>
                                    </form>
                                </tr>
@endforeach
                            </tbody>
                        </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="datatable" tabindex="0" id="datatable_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="datatable" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="datatable" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="datatable" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="datatable" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="datatable" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="datatable" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="datatable" tabindex="0" id="datatable_next"><a href="#">Next</a></li></ul></div></div></div></div>

                    </div>
                </div>
            </div>
		</div>

</div>
		</div>
	</div>
</div>

<!-- Modal Code Here  -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add Customer Info</h4> 
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
            <div class="modal-body"> 
<form role="form" action="{{ url('insert-customer') }}" method="POST" enctype="multipart/form-data">
	@csrf
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Name</label> 
                            <input type="text" class="form-control" name="name" placeholder="Name"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Email</label> 
                            <input type="email" class="form-control" name="email" placeholder="Email"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Phone</label> 
                            <input type="text" class="form-control" name="phone" placeholder="Phone "> 
                        </div> 
                    </div>
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Ashopnameddress	</label> 
                            <input type="text" class="form-control" name="address" placeholder="address	"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Shopname</label> 
                            <input type="text" class="form-control" name="shopname" placeholder="shopname"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Bank Name</label> 
                            <input type="text" class="form-control" name="bank_name" placeholder="Bank Name "> 
                        </div> 
                    </div>
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Bank Acc Number</label> 
                            <input type="text" class="form-control" name="bank_acc_number" placeholder="Bank Acc Number"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Bank Branch Name</label> 
                            <input type="text" class="form-control" name="bank_branch" placeholder="Bank Branch Name"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">NID No</label> 
                            <input type="text" class="form-control" name="nid_no" placeholder="NID No "> 
                        </div> 
                    </div>
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">City</label> 
                            <input type="text" class="form-control" name="city" placeholder="City"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                           <label for="exampleInputPassword1">Photo</label>
                         
                            <input type="file" name="photo" accept="image/*" class="form-control" id="exampleInputPassword1" required onchange="readURL(this)" class="upload" placeholder="Experince">
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                          <img  id="image" src="#" style="margin-top: 10px;">
                            
                        </div> 
                    </div>  
                    
                    
                </div> 
               
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
            </form>
        </div> 
    </div>
</div><!-- /.modal -->


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