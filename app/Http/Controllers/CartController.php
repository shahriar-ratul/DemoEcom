<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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

        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        $cartItems = \Cart::session(auth()->id())->getContent();

        $subTotal = \Cart::session(auth()->id())->getSubTotal();
        $total = \Cart::session(auth()->id())->getTotal();
        return view('frontend.pages.cart.index', compact('cartItems','categories','subcategories','subTotal','total'));
    }

    public function add($id){
        $product = Product::find($id);
//        dd($product);
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');

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
    public function update(Request $request)
    {
        foreach($request->id as $key=>$rowId){
                \Cart::session(auth()->id())->update($rowId, [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity[$key],
                    ]
                ]);
            }
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Cart::session(auth()->id())->remove($id);

        return back();
    }
    public function clear_all()
    {

        \Cart::session(Auth()->user()->id)->clear();

        return back();
    }

    public function checkout(){
        $categories =Category::where('status','1')->get();
        $subcategories = SubCategory::where('status','1')->get();
        return view('frontend.pages.cart.checkout',compact('categories','subcategories'));
    }
}
