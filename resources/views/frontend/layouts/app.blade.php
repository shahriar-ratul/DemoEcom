<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('frontend.layouts.partial.header')


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
