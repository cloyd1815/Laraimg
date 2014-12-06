@extends('layouts.default')
@section('content')
<h1>User: {{{ $user->username }}}</h1>
<div class="col-md-6">
	<h1>Uploads: (recents)</h1>
	<hr class="featurette-divider">
	@foreach($uploads as $upload)
		<div class="panel panel-primary">
			@if($upload->img_name != null or $upload->img_desc != null)
				<div class="panel-heading">
					<h1>{{{ $upload->img_name }}}</h1>
					<h4 class="text-muted">{{{ $upload->img_desc }}}</h4>
				</div>
			@endif
			<a href="{{ $url = asset($upload->file_name) }}">
				<div class="panel-body">
					<img id="main-image" src="{{$url = asset('/images/' . $upload->file_name . '.png') }}" />
				</div>
			</a>
		</div>
		@endforeach
</div>
@stop