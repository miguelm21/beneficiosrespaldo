@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
	</div>
</div>


@if(!$userbenefits->isEmpty())
	@foreach($userbenefits as $ub)
		<img src="data:image/png;base64,{{ $ub->image }}" alt="new-{{ $ub->id }}" >
		{{ $ub->name }}
		{{ $ub->description }}
	@endforeach
@endif
@endsection