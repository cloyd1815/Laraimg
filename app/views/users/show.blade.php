@extends('layouts.default')
@section('content')
<h1>User: {{{ $user->username }}}<h1>
	<div class="col-md-6">
		<h1>Uploads: (recents)</h1>
		<hr class="featurette-divider">
		@foreach($uploads as $upload)
		<img id="main-image" src="{{$url = asset('/images/' . $upload->file_name . '.png') }}" />
		@endforeach
	</div>
@stop