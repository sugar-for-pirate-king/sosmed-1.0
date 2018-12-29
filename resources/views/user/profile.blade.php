@extends('layouts.app')

@section('content')
<div class="container">
@foreach($user as $u)
	{{ $u->name }}
@endforeach
</div>
@endsection