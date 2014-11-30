<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	@if(Session::has('message'))
		<p>{{ Session::get('message') }}</p>
	@endif
	@yield('content')
</body>
</html>