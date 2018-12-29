@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($user as $u)
		<div class="jumbotron">
			<img src="{{ asset('images/user.jpg') }}">
			<h2>{{ $u->name }}</h2>
			<p>{{ $u->username }}</p>
		</div>
	@endforeach
</div>
@endsection
<style type="text/css">
	.jumbotron{
		background: url(../images/user.jpg);
	}

	.jumbotron img{
		width: 200px;
		height: 200px;
		border-radius: 50%;
		border: 7px solid white;
	}

	.jumbotron h2, p{
		color: #fff;
		margin-left: 5%;
	}
</style>