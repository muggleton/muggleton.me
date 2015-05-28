
<nav class="navbar @if(isset($fixed_top))navbar-fixed-top @endif" id="topbar">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">M</a>
		</div>

		<div class="collapse navbar-collapse" id="topbar-collapse">
			<ul class="hidden-xs nav navbar-nav navbar-right navbar-social">
				<li><a href="http://stackoverflow.com/users/893541/muggles" target="new"><i class="fa fa-stack-overflow"></i></a></li>
				<li><a href="https://github.com/muggleton" target="new"><i class="fa fa-github"></i></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li {{ Request::is('projects*') ? ' class="active"' : '' }}><a href="/projects">Projects</a></li>
				<li {{ Request::is('contact*') ? ' class="active"' : '' }}><a href="/contact">Contact</a></li>
				@if(!Auth::guest())
				<li><a href="/contact/messages">Messages ({{{Message::whereRead(false)->count()}}})</a></li>
				<li><a href="/admin/logout">Logout</a></li>
				@endif
			</ul>
			<ul class="visible-xs nav navbar-nav navbar-right navbar-social">
				<li><a href="http://stackoverflow.com/users/893541/muggles" target="new"><i class="fa fa-stack-overflow"></i></a></li>
				<li><a href="https://github.com/muggleton" target="new"><i class="fa fa-github"></i></a></li>
			</ul>
		</div>
	</div>
</nav>