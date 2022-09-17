@extends('app')

@section('title', 'Página Inicial')

@section('content')
	<div class="container">
		@forelse($rooms as $room)
		<div class="card" style="width: 18rem;">
			<div class="card-body">
			<h5 class="card-title">{{ $room->name }}</h5>
			<a href="{{ route('room.show', $room->id) }}" class="btn btn-primary">ENTRAR</a>
			</div>
		</div>
		@empty

		@endforelse

	</div>

@stop
