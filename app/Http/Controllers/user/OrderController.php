<?php

namespace App\Http\Controllers\user;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
        $orders = Order::where('user_id',Auth::user()->id)->get();
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();

        return view('frontend.pages.user.order',compact('orders','categories','subcategories'));
    }
    public function order($id){

        $order = Order::find($id);
        $order_items = OrderItem::latest()->get();
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();

        return view('frontend.pages.user.order_details',compact('order','order_items','categories','subcategories'));
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
