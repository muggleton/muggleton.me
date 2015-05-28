@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/admin.css')}}
@endsection
@section('title')
M - Login
@endsection
@section('content')
<div class="container admin-container">
	<h1 class="title">Well hello...</h1>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-push-3">
			<div class="row">
				<div class="col-xs-12">

					{{Form::open();}}
					@if($errors->has())
					<div class="alert alert-danger">Woops...Incorrect username or password :'(</div>
					@endif
					<div class="form-group">
						<label for="name">Username</label>
						{{Form::text('username', null, ['id' => 'name', 'class' => 'form-control input-lg']);}}
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<label for="email">Password</label>
						{{Form::password('password', ['id' => 'email', 'class' => 'form-control input-lg']); }}
					</div>
				</div>
				<div class="col-xs-12">
					{{Form::submit('Login', ['class' => 'btn-trans'])}}
				</div>
				{{Form::close();}}
			</div>
		</div>
	</div>
</div>
@endsection


