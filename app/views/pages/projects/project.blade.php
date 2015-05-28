@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/project.css')}}
@endsection
@section('scripts')
{{HTML::script('/assets/js/pages/project.js')}}

@endsection
@section('title')
{{{$project->title}}} - M
@endsection
@section('content')
<div class="cover" data-color="{{$project->colour}}">
	<div class="cover-content">
		<img class="cover-logo" src="{{$project->logo_url}}">
	</div>
</div>
<div class="container project-container">
	@if(!Auth::guest())
	<div class="row">
		<div class="col-xs-12 admin-options-container">
			<a class="btn-round" href="/projects/edit/{{$project->name}}">Edit</a>
			<a class="btn-round btn-delete-project" href="/projects/delete/{{$project->name}}">Delete</a>
		</div>
	</div>
	@endif
	<div class="row">

		<div class="col-sm-4 col-xs-12">
			<h3>Screenshots</h3>
			<a class="lightbox" href="#_" id="lightbox">
				<img id="lightbox-image" src="">
			</a>
			<div class="row">
				@foreach($project->screenshots as $screenshot)
				<div class="col-sm-6 col-xs-4">
					<a class="project-screenshot" data-image="{{{$screenshot->url}}}" href="#lightbox">
						<div class="project-screenshot-overlay">
							<div class="project-screenshot-overlay-view">
								Enlarge
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-sm-8 col-xs-12">
			<h3>About</h3>

			<p>
				@if($project->url)
				<a href="{{{$project->url}}}" target="new" class="project-link">{{{$project->url}}} <i class="fa fa-external-link fa-small"></i></a>
				@endif

				{{$project->about}}
			</p>

			<h3>Technologies</h3>
			<ul class="project-technologies">
				@foreach($project->technologies as $technology)
				<li>{{$technology->content}}</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection