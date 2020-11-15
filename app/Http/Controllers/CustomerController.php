<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('adminpages.customer.add-customer');
    }

 
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:customers|max:255',
            'phone' => 'required|unique:customers|max:255',
            'address' => 'required',
            'photo' => 'required',
            'city' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['shopname'] = $request->shopname;
        $data['bank_name'] = $request->bank_name;
        $data['bank_acc_number'] = $request->bank_acc_number;
        $data['bank_branch'] = $request->bank_branch;
        $data['nid_no'] = $request->nid_no;
        $data['city'] = $request->city; 
        $image = $request->file('photo');

        if ($image) {
            $image_name = str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/customer/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $customer=DB::table('customers')->insert($data);
               if ($customer) {
                   $notification=array(
                    'message'=>'Customer Inserted successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_customer')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }
    }


    public function all_customer()
    {
        $customers = Customer::all();
        return view('adminpages.customer.all-customer', compact('customers'));
    }

    public function view_customer($id)
    {
        $customers = DB::table('customers')->where('id', $id)->first();
        
        return view('adminpages.customer.view-customer', compact('customers'));
    }

    public function edit_customer($id)
    {
        $edit = DB::table('customers')->where('id', $id)->first();
        return view('adminpages.customer.edit-customer', compact('edit'));
    }

    public function update_customer(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required',
            'photo' => 'required',
            'city' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['shopname'] = $request->shopname;
        $data['bank_name'] = $request->bank_name;
        $data['bank_acc_number'] = $request->bank_acc_number;
        $data['bank_branch'] = $request->bank_branch;
        $data['nid_no'] = $request->nid_no;
        $data['city'] = $request->city; 
        $image = $request->photo;

        if ($image) {
            $image_name = str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/customer/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $img=DB::table('customers')->where('id', $id)->first();
               $image_path = $img->photo;
               $done = unlink($image_path);
               $user = DB::table('customers')->where('id', $id)->update($data);
               if ($user) {
                   $notification=array(
                    'message'=>'Image updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_customer')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_customer($id)
    {
        $delete = DB::table('customers')->where('id', $id)->first();
        $photo = $delete->photo;
        unlink($photo);
        $deleteUser = DB::table('customers')->where('id', $id)->delete();

        if ($deleteUser) {
                   $notification=array(
                    'message'=>'Customer deleted successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all-customer')->with($notification);
               
               }else
               {
                return Redirect()->back();

            }
    }
}
