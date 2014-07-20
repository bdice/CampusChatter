<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="cleartype" content="on">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
	<link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
	<link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#222222">

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">

	<!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="">

	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/normalize.css'); }}
	{{ HTML::style('css/foundation.css'); }}
	{{ HTML::style('css/app.css'); }}
	{{ HTML::script('js/modernizr.min.js') }}
</head>
<body>
<div class="page">
	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			@include('navigation')
			<section class="main-section">
				@yield('content')
			</section>
			<a class="exit-off-canvas"></a>
		</div>
	</div>
</div>
@include('footer')
{{ HTML::script('js/fastclick.min.js') }}
{{ HTML::script('js/jquery_1.11.1.min.js') }}
{{ HTML::script('js/foundation/foundation.js') }}
{{ HTML::script('js/foundation/foundation.offcanvas.js') }}
{{ HTML::script('js/foundation/foundation.topbar.js') }}
<script>
  $(document).foundation();
</script>
</body>
</html>
