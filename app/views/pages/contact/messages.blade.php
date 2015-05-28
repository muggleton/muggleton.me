@extends('template.base')
@section('title')
Messages - M
@endsection
@section('scripts')
@endsection
@section('styles')
@section('content')
<div class="container">
	<h1 class="title">My messages</h1>
	<table class="table table-striped messages-container">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>Email</th>
				<th>Date</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $message)
			<tr>
				<th scope="row"><i class="fa {{$message->read ? 'fa-envelope-o' : 'fa-envelope'}}"></i></th>
				<td>{{$message->name}}</td>
				<td>{{$message->email}}</td>
				<td>{{$message->created_at}}</td>
				<td><a href="/contact/messages/1">View</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$messages->links()}}
</div>
@endsection