@component('mail::message')
# Order Receipt

Thanks for your Order.

Here is your receipt

<h2> Order Number : {{$order->order_number}} </h2>

<table class="table text-center">
    <thead>
        <tr>
            <th>Product name</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>{{ $item->pivot->price }} BDT</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h1 >Total Amount: {{$order->grand_total}} BDT</h1>


@component('mail::button', ['url' => route('user.details.order',$order->id)])
Order Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
