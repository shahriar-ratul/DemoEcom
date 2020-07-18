<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\OrderMail;
use App\Order;
use App\OrderItem;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    }

    public function orderDetails($id){

        $order = Order::find($id);
        $order_items = OrderItem::latest()->get();

        return view('frontend.pages.user.order_details',compact('order','order_items'));
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
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);

        if(\Cart::session(auth()->id())->getContent()->count() > 0){

            $order = new Order();

            $order->order_number = uniqid('OrderNumber-');

            $order->shipping_fullname = $request->input('shipping_fullname');
            $order->shipping_address = $request->input('shipping_address');
            $order->shipping_city = $request->input('shipping_city');
            $order->shipping_state = $request->input('shipping_state');
            $order->shipping_phone = $request->input('shipping_phone');
            $order->shipping_zipcode = $request->input('shipping_zipcode');
            $order->shipping_email = $request->input('shipping_email');

            if(!$request->has('billing_fullname')) {
                $order->billing_fullname = $request->input('shipping_fullname');
                $order->billing_state = $request->input('shipping_state');
                $order->billing_city = $request->input('shipping_city');
                $order->billing_address = $request->input('shipping_address');
                $order->billing_phone = $request->input('shipping_phone');
                $order->billing_zipcode = $request->input('shipping_zipcode');
                $order->billing_email = $request->input('shipping_email');
            }else {
                $order->billing_fullname = $request->input('billing_fullname');
                $order->billing_state = $request->input('billing_state');
                $order->billing_city = $request->input('billing_city');
                $order->billing_address = $request->input('billing_address');
                $order->billing_phone = $request->input('billing_phone');
                $order->billing_zipcode = $request->input('billing_zipcode');
                $order->billing_email = $request->input('billing_email');
            }


            $order->grand_total = \Cart::session(auth()->id())->getTotal();
            $order->item_count = \Cart::session(auth()->id())->getContent()->count();

            $order->user_id = auth()->id();

            $order->created_by = Auth::user()->id;
            $order->updated_by = Auth::user()->id;
            $order->save();

            //save order items

            $cartItems = \Cart::session(auth()->id())->getContent();

            foreach($cartItems as $item) {
                $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
            }

            $order_id = $order->id;

            //empty cart
            \Cart::session(auth()->id())->clear();
            //send email to customer
            Mail::to($order->user->email)->send(new OrderMail($order));

            return redirect()->route('complete.order',[$order_id]);
        }else{
            toastr()->warning('Please comfirm your order again');
            return redirect()->back();
        }

    }

    public function thankyou($id)
    {
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        $order = Order::find($id);
        $order_items = OrderItem::where('order_id',$id)->get();

        toastr()->success('You Have been Order Successfuly');
        return view('frontend.pages.cart.thank_you', compact('categories','subcategories','order','order_items'));
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
