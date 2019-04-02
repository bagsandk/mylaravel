<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="{!! asset('css/docss.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}">
</head>
<body>
<header>
<div id='cssmenu'>
<ul>
	@section('sidebar')
   <li class='active'><a href='#'><span>HTML</span></a></li>
   <li><a href='#'><span>CSS</span></a></li>
   <li><a href='#'><span>JS</span></a></li>
   <li class='last'><a href='#'><span>@show</span></a></li>
</ul>
</div>
</header>
<div class='container'>
		<div class="col-md-12" role="main">
			<h2>@yield('content')</h2>
		</div>
</div>
</body>
</html>
