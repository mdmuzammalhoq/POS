<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add_cart(Request $request)
    {
        $data = array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['qty']=$request->qty;
        $data['price']=$request->price;
        $data['weight']=0;

        $cart = Cart::add($data);
            if ($cart) {
                   $notification=array(
                    'message'=>'Product Added.',
                    'alert-type'=>'success'
                );
                   return Redirect()->back()->with($notification);
               
            }else{
                return Redirect()->back();

            }
    }


    public function show($id)
    {
        //
    }


    public function CreateInvoice(Request $request)
    {
         $request->validate([
            'cus_id' => 'required',
        ],
        [
            'cus_id.required' => 'Select A Customer First !',
        ]);
        $content = Cart::content();
        $cus_id = $request->cus_id;
        $custom = DB::table('customers')->where('id', $cus_id)->first();
        return view('adminpages.invoice.invoice', compact('content', 'custom'));
    }


    public function UpdateCart(Request $request, $rowId)
    {
        $qty = $request->qty;
        $update = Cart::update($rowId, $qty);
         if ($update) {
                   $notification=array(
                    'message'=>'Cart Updated.',
                    'alert-type'=>'success'
                );
                   return Redirect()->back()->with($notification);
               
            }else{
                return Redirect()->back();

            }
    }

    public function RemoveCart($rowId)
    {
        $remove = Cart::remove($rowId);
        if ($remove) {
                   $notification=array(
                    'message'=>'Cart Removed.',
                    'alert-type'=>'success'
                );
                   return Redirect()->back()->with($notification);
               
            }else{
                return Redirect()->back();

            }
    }

    public function FinalInvoice(Request $request)
    {
        $data = array();
        $data['customer_id']=$request->customer_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['sub_total']=$request->sub_total;
        $data['vat']=$request->vat;
        $data['total']=$request->total;
        $data['payment_status']=$request->payment_status;
        $data['pay']=$request->pay;
        $data['due']=$request->due;

        $order_id = DB::table('orders')->insertGetId($data);
        $contents=Cart::content();
        $odata=array();
        foreach ($contents as $cont) {
            $odata['order_id']=$order_id;
            $odata['product_id']=$cont->id;
            $odata['quantity']=$cont->qty;
            $odata['unit_cost']=$cont->price;
            $odata['total']=$cont->total;

            $invoice = DB::table('orderdetails')->insert($odata);
        }

        if ($invoice) {
                   $notification=array(
                    'message'=>'Invoice created | Please deliver the product and accept status ',
                    'alert-type'=>'success'
                );
                   Cart::destroy();
                   return Redirect()->route('pending_orders')->with($notification);
               
            }else{
                return Redirect()->back();

            }
    }
}
