@extends('layouts.default')
@section('content')

	<div class="centered">
		{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::text('username', Input::old('email'), $attributes = array('placeholder' => 'Username', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::password('password', $attributes = array('class' => 'form-control')) }}
		</p>

		<p>{{ Form::submit('Login', $attributes = array('class' =>'btn btn-primary btn-lg text-center')) }}</p>
		{{ Form::close() }}
		<p>Don't have an account? <a href="/signup">Signup!</a></p>
	</div>
@stop