
@extends('layouts.default')
@section('content')

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

     <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading">upimg &#183; <span class="text-muted">What is upimg?</span></h2>
          <p class="lead">upimg was created by <a href="http://ashworth.in">Brendan Ashworth</a>, <a href="http://apemanzilla.me">Apemanzilla</a>, and <a href="http://cloyd1815.me">Colin Loyd</a>. upimg is a image hosting service. That means we will take your images and hold them for you and provide you with a hot link 
          	or a page url where you can share with friends. We even make it easier to share one picture accross multiple social media services.
          	To do so just make an account and link your Facebook, Twitter, etc.</p>
        </div>
      </div>
		</div>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
@stop