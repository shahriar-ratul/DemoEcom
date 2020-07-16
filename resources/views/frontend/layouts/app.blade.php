<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('frontend.layouts.partial.header')

{{--  <div class="tt-label">
    <div class="tt-label-new">New</div>
    <div class="tt-label-out-stock">Out Of Stock</div>
    <div class="tt-label tt-label-sale">Sale 40%</div>
    <div class="tt-label tt-label-our-fatured">Fatured</div>
</div>  --}}

<body>
<div id="loader-wrapper">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

@include('frontend.layouts.partial.topbar')

<div id="tt-pageContent">

    @yield('content')

</div>

@include('frontend.layouts.partial.footer')

</body>
</html>
