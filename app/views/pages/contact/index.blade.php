@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/contact.css')}}
@endsection
@section('scripts')
{{HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false')}}
{{HTML::script('/assets/js/pages/contact.js')}}
@endsection
@section('title')
Contact - M
@endsection
@section('content')
<div class="cover">
	<div id="map"></div>
	<div class="cover-content">
		<h1 class="cover-title">Contact me</h1>
	</div>

</div>
<div class="container contact-container">
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<h3><a class="contact-link" href="mailto:david@muggleton.me" target="_top"><i class="fa fa-envelope-o"></i> Email</a></h3>

		</div>
		<div class="col-sm-4  col-xs-12">
			<h3><a class="contact-link" href="http://stackoverflow.com/users/893541/muggles" target="new"><i class="fa fa-stack-overflow"></i> Stack Overflow</a></h3>
		</div>
		<div class="col-sm-4  col-xs-12">
			<h3><a class="contact-link" href="https://github.com/muggleton" target="new"><i class="fa fa-github"></i> Github</a></h3>
		</div>
	</div>
	<div class="row">
		@if(Session::has('success'))
		<div class="col-xs-12">
			<div class="alert alert-success">Your message has been successfully sent, cheers.</div>
		</div>
		@else
		<div class="col-xs-12 or-container">
			<h3>OR</h3>
		</div>
		<div class="col-sm-6 col-xs-12">
			{{Form::open(['id' => 'contact-form']);}}

			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				<label for="name">Name</label>
				{{Form::text('name', null, ['id' => 'name', 'class' => 'form-control input-lg', 'placeholder' => 'Emilia Clarke']);}}
				<p class="help-block">{{ $errors->has('name') ? $errors->first('name') : '' }}</p>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				<label for="email">Email</label>
				{{Form::email('email', null, ['id' => 'email', 'class' => 'form-control input-lg', 'placeholder' => 'emiliaclarke@gmail.com']);}}
				<p class="help-block">{{ $errors->has('email') ? $errors->first('email') : '' }}</p>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
				<label for="message">Message</label>
				{{Form::textarea('message', null, ['id' => 'message', 'class' => 'form-control input-lg', 'placeholder' => 'Hunny I haven\'t heard from you in a while, was it something I said?']);}}
				<p class="help-block">{{ $errors->has('message') ? $errors->first('message') : '' }}</p>
			</div>
		</div>
		<div class="col-xs-12">
			{{Form::submit('Send', ['class' => 'btn-trans'])}}
		</div>
		{{Form::close();}}
		@endif
	</div>
</div>
@endsection