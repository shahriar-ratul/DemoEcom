<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

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

        $orders = Order::latest()->get();
        $order_items = OrderItem::latest()->get();

        return view('backend.superadmin.order.index',compact('orders','order_items'));
    }

    public function canceled()
    {

        $orders = Order::where('status','canceled')->latest()->get();
        $order_items = OrderItem::latest()->get();

        return view('backend.superadmin.order.index',compact('orders','order_items'));
    }

    public function completed()
    {

        $orders = Order::where('status','completed')->latest()->get();
        $order_items = OrderItem::latest()->get();

        return view('backend.superadmin.order.index',compact('orders','order_items'));
    }
    public function active()
    {

        $orders = Order::whereIn('status',['pending','pending'])->latest()->get();
        $order_items = OrderItem::latest()->get();

        return view('backend.superadmin.order.index',compact('orders','order_items'));
    }
    public function rejected()
    {

        $orders = Order::where('status','declined')->latest()->get();
        $order_items = OrderItem::latest()->get();

        return view('backend.superadmin.order.index',compact('orders','order_items'));
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
        $order = Order::find($id);

        return view('backend.superadmin.order.edit',compact('order'));
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
            'status' => ['required'],
            'is_paid' => ['required'],
            ]);

        $order = Order::find($id);
        $order->status = $request->status;
        $order->is_paid = $request->is_paid;
        $order->save();

        toastr()->success('Order Updated Successfuly');
        return redirect()->route('superadmin.order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        toastr()->success('Order Successfully Deleted.');
        return redirect()->back();
    }
}
