@extends('template')

@section('content')
<div class="container container-edit closet-container">
	<div class="category-father">
		<div class="row my-4">
			<div class="col-lg-3 m-lg-auto d-flex col-sm-3 m-sm-auto col-12">
				<h4 class=" category-father__title">{{ $search }}</h4>
			</div>
		</div>
		<div class="row">
			@foreach($benefits as $b)
			<div class="col-md-3 col-sm-6" >
				<div class="service-box">
					<a href="{{ route('benefit', $b->id) }}" id="benefit" name="{{ $b->id }}">
						<div class="service-icon background-box">
							<div class="front-content">
								<img src="data:image/png;base64,{{ $b->image }}" class="img-fluid" alt="">
							</div>
							<h3>{{ $b->name }}</h3>
						</div>
						<div class="service-content">
							<h3>{{ $b->name }}</h3>
							<p>{{ $b->description }}</p>
							<span class="span-box">{{ $b->percent }}%</span>
						</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection