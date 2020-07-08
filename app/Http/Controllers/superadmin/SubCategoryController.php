<?php

namespace App\Http\Controllers\superadmin;

use App\Category;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('backend.superadmin.category.index_sub_category',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.superadmin.category.create_sub_category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','unique:categories'],
            ]);
        $subcategory= new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->status = $request->status;
        $subcategory->created_by = Auth::user()->id;
        $subcategory->updated_by = Auth::user()->id;
        $subcategory->save();
        toastr()->success('Subcategory Added Successfuly');
        return redirect()->route('superadmin.subcategory.index');
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
        $subcategory = SubCategory::find($id);
        $categories  = Category::get();
        return view('backend.superadmin.category.edit_sub_category',compact('subcategory','categories'));
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
        $this->validate($request,[
            'name' => ['required'],
            ]);
        $subcategory= SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category;
        $subcategory->status = $request->status;
        $subcategory->updated_by = Auth::user()->id;
        $subcategory->save();
        toastr()->success('subcategory Updated Successfuly');
        return redirect()->route('superadmin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        toastr()->success('SubcategorySuccessfully Deleted.');
        return redirect()->back();
    }
}
