@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/projects.css')}}
@endsection
@section('scripts')
{{HTML::script('/assets/js/pages/projects.js')}}
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
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<a href="/projects/kindfile" class="project-entry" data-project="kindfile">
					<div class="project-entry-overlay">
						<div class="project-entry-overlay-view">View</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection