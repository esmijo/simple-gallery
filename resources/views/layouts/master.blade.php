<!DOCTYPE html>
<html>
<head>
	<title>Gallery App - @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/jquery.dataTables.min.js"></script>
	<script src="/js/app.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/manage">Manage Entries</a></li>
		</ul>
	</nav>
	@yield('content')


</body>
</html>