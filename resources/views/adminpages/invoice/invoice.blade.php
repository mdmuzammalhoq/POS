@extends('layouts.app')

@section('content') 

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Invoice</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">KE</a></li>
                                    <li class="active">Invoice</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right" style="color: #ca2424;font-weight: 700;text-decoration: underline;font-style: italic;">Kopotakkho Enterprise</h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice Date# <br>
                                                    <strong>{{ date('d-m-Y')}}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>{{ $custom->name }}</strong><br>
                                                      {{ $custom->shopname }}<br>
                                                      {{ $custom->address }}
                                                      <br>
                                                      <abbr title="Phone">P: {{$custom->phone }}</abbr>
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong> {{ date('F j, Y, g:i a') }}</p>
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                                    
                                                    <p class="m-t-10"><strong>Order ID: </strong> #</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                            <th>Item</th>
                                                            <th>Net Weight</th>
                                                            <th>Quantity</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php 
                                                        		$sl = 1;
                                                        	@endphp
                                                        	@foreach($content as $cont)
                                                            <tr>
                                                                <td>{{ $sl++ }}</td>
                                                                <td>{{ $cont->name }}</td>
                                                                <td>{{ $cont->weight }}</td>
                                                                <td>{{ $cont->qty }}</td>
                                                            </tr>
                                                           @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total:</b> Not Necessary</p>
                                                <p class="text-right">Discout: Not Necessary</p>
                                                <p class="text-right">VAT: Not Necessary</p>
                                                <hr>
                                                <h3 class="text-right">USD Not Necessary</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" onclick = "window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

</div>

<!-- Payable Modal -->

<!-- Modal Code Here  -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Invoice of {{ $custom->name }} <span class="text-warning pull-right">Total : {{ Cart::total() }}</span></h4> 
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
<form role="form" action="{{ url('final-invoice') }}" method="POST">
	@csrf
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Payment Status</label> 
                            <select name="payment_status" class="form-control">
                            	<option value="HandCash">HandCash</option>
                            	<option value="Cheque">Cheque</option>
                            	<option value="Due">Due</option>
                            </select>
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Pay</label> 
                            <input type="text" class="form-control" name="pay" placeholder="Pay Amount"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Due</label> 
                            <input type="text" class="form-control" name="due" placeholder="Due Amount "> 
                        </div> 
                    </div>
                </div> </div> 
<input type="hidden" name="customer_id" value="{{ $custom->id }}">
<input type="hidden" name="order_date" value="{{ date('d-m-Y') }}">
<input type="hidden" name="order_status" value="Pending">
<input type="hidden" name="total_products" value="{{ Cart::count() }}">
<input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
<input type="hidden" name="vat" value="{{ Cart::tax() }}">
<input type="hidden" name="total" value="{{ Cart::total() }}">
            
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
            </form>
        </div> 
    </div>
</div><!-- /.modal -->
@endsection