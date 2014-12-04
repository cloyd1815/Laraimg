@extends('layouts.default')
@section('content')
<h1>Recent Uploads<h1>
	<hr class="featurette-divider">
	@foreach($uploads as $upload)
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h1>{{{ $upload->img_name }}}</h1>
			<h4 class="text-muted">{{{ $upload->img_desc }}}</h4>
		</div>
		<a href="{{ $url = asset($upload->file_name) }}">
			<div class="panel-body">
				<img id="main-image" src="{{$url = asset('/images/' . $upload->file_name . '.png') }}" />
			</div>
		</a>
	</div>
	@endforeach
@stop