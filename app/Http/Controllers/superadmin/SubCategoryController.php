<?php

namespace App\Http\Controllers\superadmin;

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
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('backend.superadmin.category.index_subcategory',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.superadmin.category.create_sub_category');
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
        $category = new SubCategory();
        $category->name = $request->name;
        $category->status = 1;
        $category->created_by = Auth::user()->id;
        $category->updated_by = Auth::user()->id;
        $category->save();
        toastr()->success('Category Added Successfuly');
        return redirect()->route('superadmin.category.index');
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
        $category = Category::find($id);
        return view('backend.superadmin.category.edit_category',compact('category'));
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
        $category = SubCategory::find($id);
        $category->name = $request->name;
        $category->status = 1;
        $category->created_by = Auth::user()->id;
        $category->updated_by = Auth::user()->id;
        $category->save();
        toastr()->success('Category Updated Successfuly');
        return redirect()->route('superadmin.category.index');
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
        toastr()->success('SubCategory Successfully Deleted.');
        return redirect()->back();
    }
}
