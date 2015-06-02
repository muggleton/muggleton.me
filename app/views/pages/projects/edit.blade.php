@extends('template.base')
@section('title')
Edit "{{{$project->title}}}" - M
@endsection
@section('scripts')
{{HTML::script('/assets/js/vendor/bootstrap/bootstrap-datepicker.min.js')}}
@endsection
@section('styles')
{{HTML::style('/assets/css/vendor/bootstrap/bootstrap-datepicker.min.css')}}
@section('content')
<div class="container new-project-container">
	<h1 class="title">Edit "{{{$project->title}}}"</h1>
	{{Form::open(['id' => 'project-form']);}}
	<div class="row">
		<div class="col-xs-12">
			

			@if($errors->has())
			<div class="alert alert-danger">
				<p>Yeh some errors occured..</p>
				<ul>
					@foreach($errors->all('<li>:message</li>') as $error)
					{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Title</label>
				{{Form::text('title', $project->title, ['class' => 'form-control input-lg', 'placeholder' => 'Example Project']);}}
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Project URL</label>
				{{Form::text('url', $project->url, ['class' => 'form-control input-lg', 'placeholder' => 'http://www.muggleton.me/']);}}
			</div>
			
		</div>
		<div class="col-xs-12">
			<div class="form-group">
				<label for="name">Name</label>
				<div class="input-group">
					<span class="input-group-addon">{{Config::get('app.url')}}/projects/</span>
					{{Form::text('name', $project->name, ['class' => 'form-control input-lg', 'placeholder' => 'example-project']);}}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group">
				<label for="message">About*</label>
				{{Form::textarea('about', $project->about, ['class' => 'form-control input-lg', 'placeholder' => 'A simple website to display train times.']);}}
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group">
				<label for="email">Technologies</label>
				@if(Input::old('technology'))
				@foreach(Input::old('technology') as $key => $technology)
				{{Form::text('technology[' . $key . ']', $technology, ['class' => 'form-control input-lg technology-input', 'placeholder' => 'nginx etc']);}}
				@endforeach
				@else
				@foreach($project->technologies as $key => $technology)
				{{Form::text('technology[' . $key . ']', $technology->content, ['class' => 'form-control input-lg technology-input', 'placeholder' => 'nginx etc']);}}
				@endforeach
				@endif
				<a href="#" class="btn-round btn-add-input">Add</a>
			</div>
		</div>
		
		<div class="col-xs-12">
			<div class="form-group">
				<label for="email">Logo (URL)</label>
				{{Form::text('logo_url', $project->logo_url, ['class' => 'form-control input-lg', 'placeholder' => 'http://muggleton.me/logo.png']);}}
			</div>

		</div>
		<div class="col-xs-12">
			<div class="form-group">
				<label for="email">Screenshots (URL)</label>
				@if(Input::old('screenshot'))
				@foreach(Input::old('screenshot') as $key => $screenshot)
				{{Form::text('screenshot[' . $key . ']', $screenshot, ['class' => 'form-control input-lg screenshot-input', 'placeholder' => 'http://www.google.com/']);}}
				@endforeach
				@else
				@foreach($project->screenshots as $key => $screenshot)
				{{Form::text('screenshot[' . $key . ']', $screenshot->url, ['class' => 'form-control input-lg screenshot-input', 'placeholder' => 'http://www.google.com/']);}}
				@endforeach
				@endif
				<a href="#" class="btn-round btn-add-input btn-small">Add</a>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="email">Date</label>
				{{Form::text('completion', $project->completion, ['class' => 'form-control input-lg', 'placeholder' => '21/08/2012', 'data-provide' => 'datepicker-inline', 'data-date-format' => 'yyyy-mm-dd','data-date-start', '01-01-2014']);}}
			</div>
		</div>

		<div class="col-sm-6 col-xs-12">
			<div class="form-group">
				<label for="name">Primary colour (Hex)*</label>
				<div class="input-group">
					<span class="input-group-addon">#</span>
					{{Form::text('colour', $project->colour, ['class' => 'form-control input-lg', 'placeholder' => 'exampleproject']);}}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			{{Form::submit('Update project', ['class' => 'btn-trans'])}}
		</div>
		
	</div>
	{{Form::close();}}
</div>
@endsection