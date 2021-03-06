<!DOCTYPE html>
<html lang="en">
<head>
	<title>UpImg &#183; Easy Image Uploads</title>
	<link href={{$url = asset('site.css?nocache=1') }} rel="stylesheet" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="box-shadow:none;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">upimg</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="/">Upload</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li><a href="/logout">Logout</a></li>
						<li><a href="/u/{{{ Auth::id() }}}">My Account</a>
					@else
						<li><a href="/login">Login</a></li>
					@endif
					<li><a href="blog">Blog</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>