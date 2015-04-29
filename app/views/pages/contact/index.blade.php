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
<div class="cover" id="map"></div>
<div class="container contact-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-12">
					<h3><i class="fa fa-envelope-o"></i> Email</h3>
					<p><a href="#">david@muggleton.me</a></p>
				</div>
				<div class="col-sm-12">
					<h3><i class="fa fa-stack-overflow"></i> Stack Overflow</h3>
					<p>http://stackoverflow.com/users/893541/muggles</p>
				</div>
				<div class="col-sm-12">
					<h3><i class="fa fa-github"></i> Github</h3>
					<p>https://github.com/muggleton</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<h3><i class="fa fa-bed"></i> Feeling Lazy?</h3>
			{{Form::open();}}
			<div class="form-group">
				<label for="name">Name</label>
				{{Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Emilia Clarke']);}}
				<span class="help-block">Required.</span>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				{{Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'emiliaclarke@gmail.com']);}}
				<span class="help-block">Required.</span>
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				{{Form::textarea('message', null, ['id' => 'message', 'class' => 'form-control', 'placeholder' => 'Hunny I haven\'t heard from you in a while, was it something I said?']);}}
				<span class="help-block">Definitely required.</span>
			</div>
			<button type="submit" class="btn btn-block btn-default">Send</button>
			{{Form::close();}}
		</div>
	</div>
</div>
@endsection