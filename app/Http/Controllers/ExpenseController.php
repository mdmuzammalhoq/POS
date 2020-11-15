<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_expense()
    {
       return view('adminpages.expense.add_expense');
    }


    public function insert_expense(Request $request)
    {
        $data = array();
        $data['detail']=$request->detail;
        $data['amount']=$request->amount;
        $data['date']=$request->date;
        $data['month']=$request->month;
        $data['year']=$request->year;

        $exp = DB::table('expenses')->insert($data);
           if ($exp) {
                   $notification=array(
                    'message'=>'Expense Added successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('expense_today')->with($notification);
               }
            else{
                return Redirect()->back();

            }
       
    }

 
    public function expense_today()
    {
        $today = date('d-m-Y');

        $date = DB::table('expenses')->where('date', $today)->get();

        return view('adminpages.expense.today-expense', compact('date'));
    }

  
    public function show($id)
    {
        //
    }

 
    public function edit_todayExpense($id)
    {
        $edit = DB::table('expenses')->where('id', $id)->first();
        return view('adminpages.expense.edit-expense', compact('edit'));
    }

 
    public function update_todayExpense(Request $request, $id)
    {
         $data = array();
        $data['detail']=$request->detail;
        $data['amount']=$request->amount;
        $data['date']=$request->date;
        $data['month']=$request->month;
        $data['year']=$request->year;

        $exp = DB::table('expenses')->where('id', $id)->update($data);
           if ($exp) {
                   $notification=array(
                    'message'=>'Expense Added successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('expense_today')->with($notification);
               }
            else{
                return Redirect()->back();

            }
    }

 
    public function monthly_expense()
    {
        $month = date('F');
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
 
    public function yearly_expense()
    {
        $year = date('Y');
        $yearr = DB::table('expenses')->where('year', $year)->get();

        return view('adminpages.expense.yearly_expense', compact('yearr'));
    } 
    public function january_expense()
    {
        $month = 'January';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function february_expense()
    {
        $month = 'February';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function march_expense()
    {
        $month = 'March';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function april_expense()
    {
        $month = 'April';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function may_expense()
    {
        $month = 'May';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function june_expense()
    {
        $month = 'June';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function july_expense()
    {
        $month = 'July';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function august_expense()
    {
        $month = 'August';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function september_expense()
    {
        $month = 'September';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function october_expense()
    {
        $month = 'October';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function november_expense()
    {
        $month = 'November';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
    public function december_expense()
    {
        $month = 'December';
        $expense = DB::table('expenses')->where('month', $month)->get();

        return view('adminpages.expense.monthly_expense', compact('expense'));
    }
}
