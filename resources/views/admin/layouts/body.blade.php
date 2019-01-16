<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!-- Tell the browser to be responsive to screen width -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- Favicon icon -->
	    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("img/admin/favicon.png")}}">
	    <title>Admin Panel | @yield('title')</title>
    	@include('admin.layouts.head')
    	@stack('css')
	</head>
	<body class="fix-header fix-sidebar">
		@include('admin.layouts.preloader')
		<!-- Main wrapper  -->
    	<div id="main-wrapper">
    		@include('admin.layouts.header')
    		@include('admin.layouts.sidebar')
    		<!-- Page wrapper  -->
        	<div class="page-wrapper text-{{getStyle(App::getLocale())['dir-full']}}" dir="{{getStyle(App::getLocale())['dir']}}">
        		@include('admin.layouts.page-title')
        		<!-- Container fluid  -->
            	<div class="container-fluid">
            		@yield('content')
            	</div>
            	<!-- End Container fluid  -->
        	</div>
        	<!-- End Page wrapper  -->
		</div>
    	<!-- End Wrapper -->
	</body>
</html>
@include('admin.layouts.foot')
@stack('js')