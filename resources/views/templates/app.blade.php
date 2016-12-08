<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	@yield('header')
	<div class="container">
		@yield('main')
	</div>
</body>
</html>