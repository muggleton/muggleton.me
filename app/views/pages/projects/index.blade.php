@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/projects.css')}}
@endsection
@section('title')
Projects - M
@endsection
@section('content')
<div class="cover">
	<div class="cover-content">
		<h1 class="cover-title">My projects</h1>
	</div>
</div>
<div class="container">
	<div class="projects-container">
		@if(!Auth::guest())
		<div class="row">
			<div class="col-xs-12 text-center">
				<a class="btn-round" href="/projects/new">Add a new project</a>
			</div>
		</div>
		@endif
		<div class="row">
			@foreach($projects as $project)
			<div class="col-sm-4 col-xs-12">
				<a href="/projects/{{{$project->name}}}" class="project-entry" data-color="{{$project->colour}}" data-image="{{$project->logo_url}}">
					<div class="project-entry-overlay">
						<div class="project-entry-overlay-view">View</div>
					</div>
				</a>
			</div>
			@endforeach
			
		</div>
	</div>
</div>
@endsection