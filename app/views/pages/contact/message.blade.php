@extends('template.base')
@section('title')
Messages - M
@endsection
@section('scripts')
@endsection
@section('styles')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="title">{{{$message->name}}} <small><a href="mailto:{{{$message->email}}}">{{{$message->email}}}</a></small></h1>
			<p>{{{$message->message}}}</p>
		</div>
	</div>
</div>
@endsection