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
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>{{ $order->name }}</strong><br>
                                                      {{ $order->shopname }}<br>
                                                      {{ $order->address }}
                                                      <br>
                                                      <abbr title="Phone">P: {{$order->phone }}</abbr>
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong> {{ $order->order_date }}</p>
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                                    
                                                    <p class="m-t-10"><strong>Order ID: </strong> {{ $order->id }}</p>
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
                                                            <th>Product Name</th>
                                                            <th>Product Serial</th>
                                                            <th>Quantity</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php 
                                                        		$sl = 1;
                                                        	@endphp
                                                        	@foreach($order_details as $cont)
                                                            <tr>
                                                                <td>{{ $sl++ }}</td>
                                                                <td>{{ $cont->product_name }}</td>
                                                                <td>{{ $cont->product_serial }}</td>
                                                                <td>{{ $cont->quantity   }}</td>
                                                            </tr>
                                                           @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-9">
                                                <h3>Payment BY : {{ $order->payment_status }}</h3>
                                                <h3>Pay : {{ $order->pay }}</h3>
                                                <h3>Due : {{ $order->due }}</h3>
                                            </div>
                                            <div class="col-md-3 col-md-offset-9">

                                                <p class="text-right"><b>Today:</b> {{ date('l jS F Y')}}</p>
                                                <p class="text-right"><b>Sub-total:</b> {{ $order->sub_total }}</p>
                                                <p class="text-right">Discout: Not Necessary</p>
                                                <p class="text-right">VAT: {{ $order->vat }}</p>
                                                <hr>
                                                <h3 class="text-right">USD Not {{ $order->total }}</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" onclick = "window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        @if($order->order_status == 'success')
                                        @else
                                               
                                                <a href="{{ URL::to('posDone/'.$order->id) }}" class="btn btn-primary waves-effect waves-light">Done</a>
                                        @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

</div>
</div></div>

@endsection