@extends('template.base')
@section('styles')
{{HTML::style('/assets/css/pages/project.css')}}
@endsection
@section('scripts')
{{HTML::script('/assets/js/pages/project.js')}}

@endsection
@section('title')
Kindfile - M
@endsection
@section('content')
<div class="cover">
	<div class="cover-content">
		<img class="cover-logo" src="/assets/img/projects/kf.png">
	</div>
</div>
<div class="container project-container">
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<h3>Screenshots</h3>
			<a class="lightbox" href="#_" id="lightbox">
				<img id="lightbox-image" src="">
			</a>
			<div class="row">
				<div class="col-sm-6 col-xs-4">
					
					<a class="project-screenshot" data-image="1" href="#lightbox">
						<div class="project-screenshot-overlay">
							<div class="project-screenshot-overlay-view">
								Enlarge
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-xs-4">
					<a class="project-screenshot" data-image="1"></a>
				</div>
				<div class="col-sm-6 col-xs-4">
					<a class="project-screenshot" data-image="1"></a>
				</div>
				<div class="col-sm-6 col-xs-4">
					<a class="project-screenshot" data-image="1"></a>
				</div>

			</div>
		</div>
		<div class="col-sm-8 col-xs-12">
			<h3>About</h3>

			<p>
				<a href="http://www.kindfile.com" target="new" class="project-link">http://www.kindfile.com/ <i class="fa fa-external-link fa-small"></i></a>
				I wanted to recreate the PPD (pay per download) modal, with a responsive, easy to use and simple application.</p>

				<h3>Technologies</h3>
				<ul class="project-technologies">
					<li><a href="http://wiki.nginx.org/Main" target="new">nginx</a> - Incredibly fast, good documentation, rich in modules which for this work allowed for file uploads, authentication requests, and downloads without having to touch Laravel.</li>
					<li><strong>Bootstrap</strong> - Provided the back bone for responsive layouts. Allowed compatibility with older browsers. Ensured a coherent design throughout the site. </li>
					<li><strong>jQuery</strong> - Allowed for manipulating the DOM elements with wide-spread browser support, templating and performing ajax requests with an easy to follow syntax. As well as a huge library of plugins.</li>
				</ul>
			</div>
		</div>
	</div>
	@endsection