<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend.layouts.app');
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        $banners = Banner::where('status','1')->latest()->get();
        $latest_products = Product::where('product_status','1')->where('is_latest','1')->latest()->paginate(8);
        $featured_products = Product::where('product_status','1')->where('is_featured','1')->latest()->paginate(8);
        return view('frontend.pages.welcome',compact('banners','latest_products','featured_products','categories','subcategories'));
    }
    public function admin()
    {
        // return view('backend.layouts.app');
        return redirect()->route('admin.login');
    }
    public function showAdminlogin()
    {
        return view('backend.auth.login');
    }
    public function about_us(){

        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.common.about',compact('categories','subcategories'));
    }
    public function contact_us(){

        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.common.contact',compact('categories','subcategories'));
    }

    public function faq(){

        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.common.faq',compact('categories','subcategories'));
    }
    public function terms_and_condition(){

        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.common.terms_and_condition',compact('categories','subcategories'));
    }

    public function all_products(){

        $products =Product::paginate(15);
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.product.products',compact('categories','subcategories','products'));
    }
    public function single_product($id){

        $product =Product::find($id);
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.product.products',compact('categories','subcategories','product'));
    }
    public function show_product_by_category($cat_id){

        $products =Product::where('category_id',$cat_id)->where('status','1')->get();
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.product.products',compact('categories','subcategories','products'));
    }
    public function show_product_by_subcategory($cat_id,$sub_cat_id){

        $products =Product::where('category_id',$cat_id)->where('subcategory_id',$sub_cat_id)->where('status','1')->get();
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.product.products',compact('categories','subcategories','products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
