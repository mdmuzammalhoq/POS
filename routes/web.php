<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Employee Routes
Route::get('/add-employee', 'EmployeeController@index')->name('add_employee');
Route::post('/insert-employee', 'EmployeeController@store');
Route::get('/all-employee', 'EmployeeController@all_employee')->name('all_employee');
Route::get('/view-employee/{id}', 'EmployeeController@view_employee');
Route::get('/delete-employee/{id}', 'EmployeeController@delete_employee');
Route::get('/edit-employee/{id}', 'EmployeeController@edit_employee');
Route::post('/update-employee/{id}', 'EmployeeController@update_employee');

// Customer Routes
Route::get('/add-customer', 'CustomerController@index')->name('add_customer');
Route::get('/all-customer', 'CustomerController@all_customer')->name('all_customer');
Route::post('/insert-customer', 'CustomerController@store');
Route::get('/view-customer/{id}', 'CustomerController@view_customer');
Route::get('/edit-customer/{id}', 'CustomerController@edit_customer');
Route::post('/update-customer/{id}', 'CustomerController@update_customer');
Route::post('/delete-customer/{id}', 'CustomerController@delete_customer');


// Suppliers Route
Route::get('/add-supplier', 'SupplierController@index')->name('add_supplier');
Route::get('/all-supplier', 'SupplierController@all_supplier')->name('all_supplier');
Route::post('/insert-supplier', 'SupplierController@insert_supplier');
Route::get('/edit-supplier/{id}', 'SupplierController@edit_supplier');
Route::post('/update-supplier/{id}', 'SupplierController@update_supplier');
Route::get('/view-supplier/{id}', 'SupplierController@view_supplier');

// Salary Routes
Route::get('/add-advanced-salary', 'SalaryController@index')->name('add_advance_salary');
Route::post('/insert-advancesalary', 'SalaryController@insert_advance_salary');
Route::get('/all-advanced-salary', 'SalaryController@all_advance_salary')->name('all_advance_salary');
Route::get('/pay-salary', 'SalaryController@pay_salary')->name('pay_salary');


// Category Route
Route::get('/add-category', 'CategoryController@index')->name('add_category');
Route::get('/all-category', 'CategoryController@all_category')->name('all_category');
Route::post('/insert-category', 'CategoryController@insert_category');


// Product Route
Route::get('/add-product', 'ProductController@index')->name('add_product');
Route::get('/all-product', 'ProductController@all_product')->name('all_product');
Route::post('/insert-product', 'ProductController@insert_product');
Route::post('/delete-product/{id}', 'ProductController@delete_product');
Route::get('/edit-product/{id}', 'ProductController@edit_product');
Route::post('/update-product/{id}', 'ProductController@update_product');
Route::get('/view-product/{id}', 'ProductController@view_product');

// Expense
Route::get('/add-expense', 'ExpenseController@add_expense')->name('add_expense');
Route::get('/expense-today', 'ExpenseController@expense_today')->name('expense_today');
Route::post('/insert-expense', 'ExpenseController@insert_expense');
Route::get('/edit-todayExpense/{id}', 'ExpenseController@edit_todayExpense');
Route::post('/update-todayExpense/{id}', 'ExpenseController@update_todayExpense');
Route::get('/monthly-expense', 'ExpenseController@monthly_expense')->name('monthly_expense');
Route::get('/yearly-expense', 'ExpenseController@yearly_expense')->name('yearly_expense');

// Monthly Expense Routes are here
Route::get('/january-expense', 'ExpenseController@january_expense')->name('january_expense');
Route::get('/february-expense', 'ExpenseController@february_expense')->name('february_expense');
Route::get('/march-expense', 'ExpenseController@march_expense')->name('march_expense');
Route::get('/april-expense', 'ExpenseController@april_expense')->name('april_expense');
Route::get('/may-expense', 'ExpenseController@may_expense')->name('may_expense');
Route::get('/june-expense', 'ExpenseController@june_expense')->name('june_expense');
Route::get('/july-expense', 'ExpenseController@july_expense')->name('july_expense');
Route::get('/august-expense', 'ExpenseController@august_expense')->name('august_expense');
Route::get('/september-expense', 'ExpenseController@september_expense')->name('september_expense');
Route::get('/october-expense', 'ExpenseController@october_expense')->name('october_expense');
Route::get('/november-expense', 'ExpenseController@november_expense')->name('november_expense');
Route::get('/december-expense', 'ExpenseController@december_expense')->name('december_expense');

// POS Routes
Route::get('/pos', 'PosController@index')->name('pos');
Route::get('/pending-orders', 'PosController@pending_orders')->name('pending_orders');
Route::get('/success_orders', 'PosController@success_orders')->name('success_orders');
Route::get('/view-order-status/{id}', 'PosController@ViewOrderStatus');
Route::get('/posDone/{id}', 'PosController@pos_done');



// Cart Routes
Route::post('/add-cart', 'CartController@add_cart')->name('add_cart');
Route::post('/update-cart/{rowId}', 'CartController@UpdateCart');
Route::get('/remove-cart/{rowId}', 'CartController@RemoveCart');
Route::post('/create-invoice', 'CartController@CreateInvoice');
Route::post('/final-invoice', 'CartController@FinalInvoice');