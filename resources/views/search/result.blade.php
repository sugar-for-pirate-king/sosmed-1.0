@extends('layouts.app')

@section('content')
<div class="container">
	<h4>Search result for: {{ Request::get('search') }}</h4>
	@if(count($key) > 0)
		@foreach($key as $user)
			{{ $user->name }}
		@endforeach
	@else
		no result!
	@endif
</div>
@endsection