@extends('layouts.default')
@section('content')
<div class="col-md-12">
	<a href="images/{{ $img }}.png" target="_self"><img src="images/{{ $img }}.png" alt="upimg image hosting utility" id="main-image" /></img>
		<hr />
		<div class="well">
			<p>Hot link to this resource: <a href="images/{{ $img }}.png">http://upimg.me/images/{{ $img }}.png</a></p>
		</div>
	</div>
