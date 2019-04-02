<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link href="{{!! asset('css/app.css')!! }}" rel="stylesheet">
<link href="{{!! asset('css/docss.css')!! }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="page-header">
			@include('layout.header')
		</div>
		<div class="col-md-4" >
		<div class="bs-sidebar" role="complementary">
		<ul class="nav bs-sidenav">  
		@section('sidebar')           
			<li>HTML</li>
			<li>CSS</li>
			<li>JS</li>
		</ul>
		</div>
		</div>
		<div class="col-md-8" role="main">
			@show
			@yield('content')
		</div>
	</div>
</body>
</html>
