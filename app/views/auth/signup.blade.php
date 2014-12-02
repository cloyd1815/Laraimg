@extends('layouts.default')
@section('content')
{{ Form::open(array('url' => '/signup')) }}
		<h1>Signup</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('name') }}
			{{ $errors->first('username') }}
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>
		<p>
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('placeholder' => 'John Doe')) }}
		</p>
		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'Username')) }}
		</p>
		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'Username or Email')) }}
		</p>
		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>
		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

@stop