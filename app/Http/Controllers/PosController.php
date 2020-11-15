<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = DB::table('products')
                ->join('categories', 'products.cat_id','categories.id')
                ->select('categories.cat_name','products.*')
                ->get();
        $customer = DB::table('customers')->get();
        $category = DB::table('categories')->get();

        return view('adminpages.pos.pos', compact('product', 'customer', 'category'));
    }


    public function pending_orders()
    {
       $pending = DB::table('orders')
       ->join('customers', 'orders.customer_id', 'customers.id')
       ->select('customers.name', 'orders.*')
       ->where('order_status', 'Pending')->get();
        return view('adminpages.pos.pending_order', compact('pending'));
    }


    public function store(Request $request)
    {
        //
    }


    public function ViewOrderStatus($id)
    {
        $order = DB::table('orders')
                ->join('customers', 'orders.customer_id', 'customers.id')
                ->select('customers.*', 'orders.*', 'orders.id as order_id')
                ->where('orders.id', $id)
                ->first();

        $order_details = DB::table('orderdetails')
                        ->join('products', 'orderdetails.product_id', 'products.id')
                        ->select('orderdetails.*', 'products.product_name', 'products.product_serial')
                        ->where('order_id', $id)
                        ->get();

        return view('adminpages.pos.order_confirm', compact('order', 'order_details'));
    }


    public function pos_done($id)
    {

        $update=DB::table('orders')->where('id',$id)->update(['order_status' => 'success']);
        // echo "<pre>";
        // print_r($approve);

           if ($update) {
                       $notification=array(
                        'message'=>'Successfully order Confirmed And All Products Delivered',
                        'alert-type'=>'success'
                    );
                       return Redirect()->route('pending_orders')->with($notification);
                   }
                else{
                     $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );

                    //return Redirect()->back();

                }
    }

    public function success_orders()
    {
        $success = DB::table('orders')
       ->join('customers', 'orders.customer_id', 'customers.id')
       ->select('customers.name', 'orders.*')
       ->where('order_status', 'success')->get();
        return view('adminpages.pos.success_order', compact('success'));
    }

}
