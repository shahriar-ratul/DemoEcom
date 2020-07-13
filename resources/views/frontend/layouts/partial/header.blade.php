
<head>
	<meta charset="utf-8">
	<title>@yield('title') - {{ config('app.name', 'E-commerce') }}</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="ratul">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('resource/logo/favicon.ico')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    @stack('css')
    <link rel="stylesheet" href="{{ asset('resource/frontend/') }}/css/theme.css">

    @toastr_css
    <style>
        .tt-desctop-menu .tt-megamenu-submenu > li > a {
            color: #777777;
            font-size: 14px;
            line-height: 22px;
            display: inline-block;
            position: relative;
            padding-top: 1px;
            padding-right: 103px;
            padding-bottom: 1px;
            padding-left: 20px;
            transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
        }
    </style>
</head>

