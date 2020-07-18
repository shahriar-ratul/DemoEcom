@component('mail::message')
# Welcome to {{ config('app.name') }}

Hi {{$data['name']}}, we’re glad you’re here! Following are your account details: <br>
</h3>
<h3>Email: </h3><p>{{$data['email']}}</p>
<h3>Username: </h3><p>{{$data['username']}}</p>


@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
