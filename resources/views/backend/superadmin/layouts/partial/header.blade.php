
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
        <title>Ecommerce | Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Ecommerce website Demo" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->



		<!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('resource/backend/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->

        @stack('css')




		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('resource/backend/') }}/assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resource/backend/') }}/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resource/backend/') }}/assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('resource/backend/') }}/assets/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resource/backend/') }}/assets/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resource/backend/') }}/assets/css/themes/layout/brand/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resource/backend/') }}/assets/css/themes/layout/aside/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->


        @stack('css1')
        @toastr_css

        <link rel="shortcut icon" href="{{ asset('resource/') }}/logo/favicon.ico" />
	</head>
	<!--end::Head-->
