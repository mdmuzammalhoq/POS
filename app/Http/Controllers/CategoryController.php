<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('adminpages.category.add-category');
    }


    public function all_category()
    {
        $categories = Category::all();
        return view('adminpages.category.all-category', compact('categories'));
    }


    public function insert_category(Request $request)
    {
        $validateData = $request->validate([
            
            'cat_name' => 'required|unique:categories|max:255',            
        ]);

            $data = array();
            $data['cat_name'] = $request->cat_name;

             $category=DB::table('categories')->insert($data);
            if ($data) {
                   $notification=array(
                    'message'=>'Category Added successfully.',
                    'alert-type'=>'success'
                );
                   return Redirect()->route('all_category')->with($notification);
               }
            else{
                return Redirect()->back();

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
