<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('adminpages.product.add-product');
    }


    public function all_product()
    {
        $products = Product::all();
        return view('adminpages.product.all-product', compact('products'));
    }


    public function insert_product(Request $request)
    {
        $validateData = $request->validate([
            'product_name' => 'required',
            'product_serial' => 'required|unique:products|max:4',
            'product_garage' => 'required',
            'product_route' => 'required',
            'product_image' => 'required',
            'buying_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'offer_price' => 'required',
            'net_weight' => 'required',
            'detail' => 'required',
            'status' => 'required',
            'total_stock' => 'required'
        ]);

         $data = array();
        $data['product_name']=$request->product_name;
        $data['cat_id']=$request->cat_id;
        $data['sup_id']=$request->sup_id;
        $data['product_serial']=$request->product_serial;
        $data['product_garage']=$request->product_garage;
        $data['product_route']=$request->product_route;
        $data['buying_date']=$request->buying_date;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;
        $data['offer_price']=$request->offer_price;
        $data['net_weight']=$request->net_weight;
        $data['detail']=$request->detail;
        $data['product_image']=$request->product_image;
        $data['total_stock']=$request->total_stock;
        $data['status']=$request->status;


        $image = $request->file('product_image');
        if ($image) {
            $image_name = str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/product/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['product_image']=$image_url;
               $employee=DB::table('products')->insert($data);
               if ($employee) {
                   $notification=array(
                    'message'=>'product uploaded successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_product')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }
    }


    public function view_product($id)
    {
        $prod = DB::table('products')
        ->join('categories', 'products.cat_id', 'categories.id')
        ->join('suppliers', 'products.sup_id', 'suppliers.id')
        ->select('categories.cat_name', 'products.*', 
            'suppliers.company')
        ->where('products.id', $id)
        ->first();
        
        return view('adminpages.product.view-product', compact('prod'));
    }

    public function edit_product($id)
    {
        $edit = DB::table('products')->where('id', $id)->first();
        return view('adminpages.product.edit-product', compact('edit'));
    }

    public function update_product(Request $request, $id)
    {
        $validateData = $request->validate([
            'product_name' => 'required',
            'product_serial' => 'required|max:4',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buying_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'offer_price' => 'required',
            'net_wight' => 'required',
            'detail' => 'required',
            'status' => 'required',
            'total_stock' => 'required'
        ]);

         $data = array();
        $data['product_name']=$request->product_name;
        $data['cat_id']=$request->cat_id;
        $data['sup_id']=$request->sup_id;
        $data['product_serial']=$request->product_serial;
        $data['product_garage']=$request->product_garage;
        $data['product_route']=$request->product_route;
        $data['buying_date']=$request->buying_date;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;
        $data['offer_price']=$request->offer_price;
        $data['net_wight']=$request->net_wight;
        $data['detail']=$request->detail;
        $data['product_image']=$request->product_image;
        $data['total_stock']=$request->total_stock;
        $data['status']=$request->status;
        $image = $request->product_image;

        if ($image) {
            $image_name = str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/product/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['product_image']=$image_url;
               $img=DB::table('products')->where('id', $id)->first();
               $image_path = $img->product_image;
               $done = unlink($image_path);
               $user = DB::table('products')->where('id', $id)->update($data);
               if ($user) {
                   $notification=array(
                    'message'=>'Product updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_product')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           $oldphoto = $request->old_photo;
           if ($oldphoto) {
            $data['product_image']=$oldphoto;
             $user = DB::table('products')->where('id', $id)->update($data);
             if ($user) {
                   $notification=array(
                    'message'=>'Product updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_product')->with($notification);
               }else{
                return Redirect()->back();
               }
           }
        }
    }

 
    public function delete_product($id)
    {
        
        $delete = DB::table('products')->where('id', $id)->first();
        $photo = $delete->product_image;
        unlink($photo);
        $deleteUser = DB::table('products')->where('id', $id)->delete();

        if ($deleteUser) {
                   $notification=array(
                    'message'=>'Product deleted successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all-product')->with($notification);
               
               }else
               {
                return Redirect()->back();

            }
    }
}
