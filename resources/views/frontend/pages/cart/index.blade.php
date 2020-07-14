@extends('frontend.layouts.app')
@section('title','Cart')
@push('css')
@endpush
@section('content')


    @if($cartItems->count() > 0 )

        <div class="tt-breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
        <div id="tt-pageContent">
            <div class="container-indent">
                <div class="container">
                    <h1 class="tt-title-subpages noborder">SHOPPING CART ITEM - {{$cartItems->count()}}</h1>
                <form action="{{route('cart.update')}}" id="update_cart" method="POST" >
                    @csrf
                    <div class="tt-shopcart-table-02">
                        <table>
                            <tbody>
                            @foreach ($cartItems as $item)
                            <input type="hidden" name="id[]" value={{$item->id}}>
                            <tr>
                                <td>
                                    <div class="tt-product-img">
                                        <img src="{{asset('resource/frontend')}}/images/loader.svg" data-src="{{asset('images')}}/{{$item->model->product_image}}" alt="">
                                    </div>
                                </td>
                                <td>
                                    <h2 class="tt-title">
                                    <a href="{{route('product.show.details',$item->id)}}">{{$item->name}}</a>
                                    </h2>
                                    <ul class="tt-list-description">
                                        <li>Size: 22</li>
                                        <li>Color: Green</li>
                                    </ul>

                                </td>
                                <td>
                                    <div class="tt-price">

                                        {{$item->price}} BDT
                                    </div>
                                </td>
                                <td>

                                    <div class="detach-quantity-desctope">
                                        <div class="tt-input-counter style-01">
                                            <span class="minus-btn"></span>
                                            <input type="number" value="{{$item->quantity}}" name="quantity[]" size="99999">
                                            <span class="plus-btn"></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="tt-price subtotal">
                                        {{$item->getPriceSum()}} BDT
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('cart.destroy',$item->id)}}" class="tt-btn-close"></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="tt-shopcart-btn">
                            <div class="col-left">
                                <a class="btn-link" href="{{route('product.show')}}"><i class="icon-e-19"></i>CONTINUE SHOPPING</a>
                            </div>
                            <div class="col-right">
                                <a class="btn-link" href="{{route('cart.clear.all')}}"><i class="icon-h-02"></i>CLEAR SHOPPING CART</a>
                                <button class="btn-link border border-white" ><i class="icon-h-48"></i>UPDATE CART</button>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="tt-shopcart-col">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">

                            </div>
                            <div class="col-md-6 col-lg-4">

                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="tt-shopcart-box tt-boredr-large">
                                    <table class="tt-shopcart-table01">
                                        <tbody>
                                            <tr>
                                                <th>SUBTOTAL</th>
                                                <td>{{$subTotal}} BDT</td>
                                            </tr>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>GRAND TOTAL</th>
                                                <td>{{$total}} BDT</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <a href="{{route('cart.checkout')}}" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
    <div class="tt-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Shopping Cart</li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent nomargin">
            <div class="tt-empty-cart">
                <span class="tt-icon icon-f-39"></span>
                <h1 class="tt-title">SHOPPING CART IS EMPTY</h1>
                <p>You have no items in your shopping cart.</p>
                <a href="{{route('product.show')}}" class="btn">CONTINUE SHOPPING</a>
            </div>
        </div>
    </div>



    @endif



@endsection


@push('js')

@endpush
