
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Invest project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{asset('images/shortcut.jpg')}}" />
		
	    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Title  -->
	    <title>{{App\Settings::app_name()->value}} | @yield('title')</title>
	    @include('website.layout.head')
	    @stack('css')
	</head>
	<body>
		<div class="super_container">

			<div class="home">
				@yield('before-header')
				@include('website.layout.header')
			</div>
			
			@yield('content')
			@include('website.layout.footer')
		</div>
	</body>
</html>
	@include('website.layout.foot')
	@stack('js')