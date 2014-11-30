<!DOCTYPE html>

<html lang="en">

<head>

	<title>UpImg &#183; Easy Image Uploads</title>

	<link href="site.css" rel="stylesheet" />

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

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

					<li class="active"><a href="#">Upload</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li><a href="/account/register">Registration</a></li>

					<li><a href="blog">Blog</a></li>

				</ul>

			</div>

		</div>

	</nav>

	<div id="mainarea" class="container">

		<h1>upimg</h1>
		@if(Session::has('message'))
			<p style="color:red">{{ Session::get('message') }}</p>
		@endif

		<br />

		<form method="POST" action="upload" enctype="multipart/form-data">

			<input id="file_input" name="file" type="file" />

			<center>

				<input class="btn btn-primary btn-lg" type="submit" />

			</center>

		</form>

	</div>

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<script src="dropzone.js" type="text/javascript"></script>

	<script>

		$(document).ready(function() {

			var imageDrop = new Dropzone("div#mainarea", { url: "/upload"});

		});

	</script>

	<script>

		$(document).ready(function() {

			setTimeout(function() {

				$("#file_input").trigger('click');

			}, 200);

		});

	</script>

</body>

</html>