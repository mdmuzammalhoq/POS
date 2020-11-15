<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {

        return view('adminpages.supplier.add-supplier');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_supplier()
    {
        $suppliers = Supplier::all();
        return view('adminpages.supplier.all-supplier', compact('suppliers'));
    }

 
    public function insert_supplier(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees|max:255',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required',
            'type' => 'required',
            'photo' => 'required',
            'city' => 'required'
        ]);

        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['company']=$request->company;
        $data['type']=$request->type;
        $data['account_holder']=$request->account_holder;
        $data['bank_name']=$request->bank_name;
        $data['bank_acc_number']=$request->bank_acc_number;
        $data['branch_name']=$request->branch_name;
        $data['photo']=$request->photo;
        $data['city']=$request->city;
        $image = $request->file('photo');
        if ($image) {
            $image_name = str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/supplier/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $supplier=DB::table('suppliers')->insert($data);
               if ($supplier) {
                   $notification=array(
                    'message'=>'Supplier Added successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_supplier')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_supplier($id)
    {
         $sup = DB::table('suppliers')->where('id', $id)->first();
        	return view('adminpages.supplier.edit-supplier', compact('sup'));
    }

    public function update_supplier(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required',
            'type' => 'required',
            'city' => 'required'
        ]);

        $data = array();
 		$data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['company']=$request->company;
        $data['type']=$request->type;
        $data['account_holder']=$request->account_holder;
        $data['bank_name']=$request->bank_name;
        $data['bank_acc_number']=$request->bank_acc_number;
        $data['branch_name']=$request->branch_name;
        $data['photo']=$request->photo;
        $data['city']=$request->city; 
        $image = $request->photo;

        if ($image) {
            $image_name = str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/supplier/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $img=DB::table('suppliers')->where('id', $id)->first();
               $image_path = $img->photo;
               $done = unlink($image_path);
               $user = DB::table('suppliers')->where('id', $id)->update($data);
               if ($user) {
                   $notification=array(
                    'message'=>'Image updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_supplier')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           $oldphoto = $request->old_photo;
           if ($oldphoto) {
           	$data['photo']=$oldphoto;
           	 $user = DB::table('suppliers')->where('id', $id)->update($data);
           	 if ($user) {
                   $notification=array(
                    'message'=>'Image updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_supplier')->with($notification);
               }else{
               	return Redirect()->back();
               }
           }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_supplier($id)
    {
        $suppl = DB::table('suppliers')->where('id', $id)->first();
        
        return view('adminpages.supplier.view-supplier', compact('suppl'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
