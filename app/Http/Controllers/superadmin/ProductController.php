<?php

namespace App\Http\Controllers\superadmin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
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
        $products = Product::latest()->get();
        return view('backend.superadmin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $manufacturers = Manufacturer::get();
        return view('backend.superadmin.product.create',compact('categories','subcategories','manufacturers'));
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
            'category' => ['required'],
            'subcategory' => ['required'],
            'manufacturer' => ['required'],
            'product_name' => ['required'],
            'product_price' => ['required'],
            'product_sku' => ['required'],
            'is_featured' => ['required'],
            'is_latest' => ['required'],
            'product_quantity' => ['required'],
            'product_status' => ['required'],
            'product_description' => ['required'],
            'product_video_link' => ['required'],
            'image_1' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_2' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_3' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_4' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_5' => 'image|mimes:jpeg,png,jpg|max:8192',

        ]);

        $category = json_encode($request->category);
        $subcategory = json_encode($request->subcategory);
        $manufacturer = json_encode($request->manufacturer);

        $name = "default.jpg";

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->slug = Str::slug($request->product_name);
        $product->product_price = $request->product_price;
        $product->is_featured = $request->is_featured;
        $product->is_latest = $request->is_latest;
        $product->product_qty = $request->product_quantity;
        $product->category_id = $category;
        $product->subcategory_id = $subcategory;
        $product->manufacturer_id = $manufacturer;
        $product->product_sku  = $request->product_sku;
        $product->product_long_description  = $request->product_description;
        $product->product_video_link  = $request->product_video_link;


        $path = storage_path('product/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }


        if($request->file('image_1')){
            $file = $request->file('image_1');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image = $name;
        }else{
            $product->product_image = $name;
        }
        $name = "default.jpg";
        if($request->file('image_2')){
            $file = $request->file('image_2');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_1 = $name;
        }else{
            $product->product_image_1 = $name;
        }
        $name = "default.jpg";
        if($request->file('image_3')){
            $file = $request->file('image_3');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_2 = $name;
        }else{
            $product->product_image_2 = $name;
        }
        $name = "default.jpg";
        if($request->file('image_4')){
            $file = $request->file('image_4');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_3 = $name;
        }else{
            $product->product_image_3 = $name;
        }
        $name = "default.jpg";
        if($request->file('image_5')){
            $file = $request->file('image_5');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_4 = $name;
        }else{
            $product->product_image_4 = $name;
        }

        $product->created_by = Auth::user()->id;
        $product->updated_by = Auth::user()->id;
        $product->save();
        toastr()->success('Product Added Successfuly');
        return redirect()->route('superadmin.product.index');
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
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $manufacturers = Manufacturer::get();
        $product = Product::find($id);
        return view('backend.superadmin.product.edit',compact('categories','subcategories','manufacturers','product'));
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
            'category' => ['required'],
            'subcategory' => ['required'],
            'manufacturer' => ['required'],
            'product_name' => ['required'],
            'product_price' => ['required'],
            'product_sku' => ['required'],
            'is_featured' => ['required'],
            'is_latest' => ['required'],
            'product_quantity' => ['required'],
            'product_status' => ['required'],
            'product_description' => ['required'],
            'product_video_link' => ['required'],
            'image_1' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_2' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_3' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_4' => 'image|mimes:jpeg,png,jpg|max:8192',
            'image_5' => 'image|mimes:jpeg,png,jpg|max:8192',

        ]);

        $category = json_encode($request->category);
        $subcategory = json_encode($request->subcategory);
        $manufacturer = json_encode($request->manufacturer);


        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->slug = Str::slug($request->product_name);
        $product->product_price = $request->product_price;
        $product->is_featured = $request->is_featured;
        $product->is_latest = $request->is_latest;
        $product->product_qty = $request->product_quantity;
        $product->category_id = $category;
        $product->subcategory_id = $subcategory;
        $product->manufacturer_id = $manufacturer;
        $product->product_sku  = $request->product_sku;
        $product->product_status  = $request->product_status;
        $product->product_long_description  = $request->product_description;


        $path = storage_path('product/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }


        if($request->file('image_1')){
            $file = $request->file('image_1');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image = $name;
        }else{

        }
        if($request->file('image_2')){
            $file = $request->file('image_2');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_1 = $name;
        }else{

        }
        if($request->file('image_3')){
            $file = $request->file('image_3');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_2 = $name;
        }else{

        }
        if($request->file('image_4')){
            $file = $request->file('image_4');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_3 = $name;
        }else{

        }
        if($request->file('image_5')){
            $file = $request->file('image_5');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $product->product_image_4 = $name;
        }else{

        }

        $product->created_by = Auth::user()->id;
        $product->updated_by = Auth::user()->id;
        $product->save();
        toastr()->success('Product Updated Successfuly');
        return redirect()->route('superadmin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        Product::find($id)->delete();
        $product = Product::find($id);

        $image = $product->product_image;
        if($image!=null && $image != "default.jpg"){
            $filepath = storage_path().'/product/uploads/'.$image;
            File::delete($filepath);
        }

        $image = $product->product_image_1;
        if($image!=null && $image != "default.jpg"){
            $filepath = storage_path().'/product/uploads/'.$image;
            File::delete($filepath);
        }

        $image = $product->product_image_2;
        if($image!=null && $image != "default.jpg"){
            $filepath = storage_path().'/product/uploads/'.$image;
            File::delete($filepath);
        }

        $image = $product->product_image_3;
        if($image!=null && $image != "default.jpg"){
            $filepath = storage_path().'/product/uploads/'.$image;
            File::delete($filepath);
        }

        $image = $product->product_image_4;
        if($image!=null && $image != "default.jpg"){
            $filepath = storage_path().'/product/uploads/'.$image;
            File::delete($filepath);
        }
        $product->delete();

        toastr()->success('Product Successfully Deleted.');
        return redirect()->back();
    }
}
