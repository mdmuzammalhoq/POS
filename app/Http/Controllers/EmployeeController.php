<?php

namespace App\Http\Controllers;

use App\Employee;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\validate;
use Validator;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('add_employee');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees|max:255',
            'phone' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'nid_no' => 'required|unique:employees|max:255',
            'salary' => 'required',
            'vacation' => 'required',
            'photo' => 'required',
            'city' => 'required'
        ]);

        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['nid_no']=$request->nid_no;
        $data['salary']=$request->salary;
        $data['vacation']=$request->vacation;
        $data['photo']=$request->photo;
        $data['experience']=$request->experience;
        $data['city']=$request->city;
        $image = $request->file('photo');
        if ($image) {
            $image_name = str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/employee/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $employee=DB::table('employees')->insert($data);
               if ($employee) {
                   $notification=array(
                    'message'=>'Image uploaded successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_employee')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }



    }

    public function all_employee()
    {
        $employees = Employee::all();
        return view('all_employee', compact('employees'));
    }


    public function view_employee($id)
    {
        $single = DB::table('employees')->where('id', $id)->first();
        
        return view('adminpages.view-employee', compact('single'));
    }
    public function delete_employee($id)
    {
        $delete = DB::table('employees')->where('id', $id)->first();
        $photo = $delete->photo;
        unlink($photo);
        $deleteUser = DB::table('employees')->where('id', $id)->delete();

        if ($deleteUser) {
                   $notification=array(
                    'message'=>'Image deleted successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_employee')->with($notification);
               
               }else
               {
                return Redirect()->back();

            }
        }
    

 
    public function edit_employee($id)
    {
        $edit = DB::table('employees')->where('id', $id)->first();
        return view('adminpages.edit-employee', compact('edit'));
    }
 
    public function update_employee(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'nid_no' => 'required|max:255',
            'salary' => 'required',
            'vacation' => 'required',
            'photo' => 'required',
            'city' => 'required'
        ]);

        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['nid_no']=$request->nid_no;
        $data['salary']=$request->salary;
        $data['vacation']=$request->vacation;
        $data['photo']=$request->photo;
        $data['experience']=$request->experience;
        $data['city']=$request->city;
        $image = $request->photo;

         if ($image) {
            $image_name = str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/employee/';
            $image_url = $upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
               $data['photo']=$image_url;
               $img=DB::table('employees')->where('id', $id)->first();
               $image_path = $img->photo;
               $done = unlink($image_path);
               $user = DB::table('employees')->where('id', $id)->update($data);
               if ($user) {
                   $notification=array(
                    'message'=>'Image updated successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_employee')->with($notification);
               }
            }else{
                return Redirect()->back();

            }
        }else{
           return Redirect()->back();
        }
    }

    public function destroy($id)
    {
        //
    }
}
