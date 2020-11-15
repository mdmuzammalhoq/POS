<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       return view('adminpages.salary.advanced_salary');
    }

    public function all_advance_salary()
    {
        $salary=DB::table('advance_salaries')->join('employees', 'advance_salaries.emp_id', 'employees.id')->select('advance_salaries.*', 'employees.name', 'employees.salary', 'employees.photo')->orderBy('id', 'DESC')->get();

        return view('adminpages.salary.all_advance_salary', compact('salary'));

    }


    public function insert_advance_salary(Request $request)
    {
        $month=$request->month;
        $emp_id=$request->emp_id;

        $advanced = DB::table('advance_salaries')->where('month', $month)->where('emp_id', $emp_id)->first();

        if ($advanced === NULL) {
            $data = array();
            $data['emp_id'] = $request->emp_id;
            $data['month'] = $request->month;
            $data['advanced_salary'] = $request->advanced_salary;
            $data['year'] = $request->year;

            $advanced = DB::table('advance_salaries')->insert($data);

                   if ($advanced) {
                       $notification=array(
                        'message'=>'Advanced Paid',
                        'alert-type'=>'success'
                    );
                       return Redirect()->route('all_advance_salary')->with($notification);
                   }else{
                    return Redirect()->back();

                }
        }else{
            $notification=array(
                        'message'=>'Oops Already Advanced Paid on this month',
                        'alert-type'=>'error'
                    );
            return Redirect()->route('all_advance_salary')->with($notification);
        }

       
    }

    public function pay_salary()
    {
        //  $month= date("F", strtotime('-1 month'));

        // $salary=DB::table('advance_salaries')->join('employees', 'advance_salaries.emp_id', 'employees.id')->select('advance_salaries.*', 'employees.name', 'employees.salary', 'employees.photo')->where('month', $month)->get();

        // return view('adminpages.salary.all_advance_salary', compact('salary'));

        $employee = DB::table('employees')->get();
        return view('adminpages.salary.pay_salary', compact('employee'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
