<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/prettyPhoto.css") }}" rel="stylesheet">
    <link href="{{ asset("css/price-range.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
	<link href="{{ asset("css/main.css") }}" rel="stylesheet">
	<link href="{{ asset("css/responsive.css") }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset("imgs/ico/favicon.ico") }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset("imgs/ico/apple-touch-icon-144-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset("imgs/ico/apple-touch-icon-114-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset("imgs/ico/apple-touch-icon-72-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset("imgs/ico/apple-touch-icon-57-precomposed.png") }}">
</head><!--/head-->

<body>
		@include('Elements.Top')
		@include('Elements.Slide')
				
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('Elements.Sidebar')
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

		@include('Elements.Footer')
	
	

  
    <script src="{{ asset("js/jquery.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/jquery.scrollUp.min.js") }}"></script>
	<script src="{{ asset("js/price-range.js") }}"></script>
    <script src="{{ asset("js/jquery.prettyPhoto.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>
</html>