@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8">
			<div class="row">
				<div class="save-benefit-father">
					<div class="col-12">
						<div class="cms-admin-father__container-title">
							<h4>Beneficios guardados</h4>
						</div>
					</div>
					<div class="col-lg-12 nopadding">
						<div class="card-horizontal">
							<div class="row">
								<div class="col-lg-3">
									<div class="card-horizontal__container-image">
										<img src="{!!asset('img/images.png')!!}" class="img-fluid" alt="">
									</div>
								</div>
								<div class="col-lg-9">
									<div class="card-horizontal__body">
										<div class="card-horizontal__body__title">
											<div class="row">
												<div class="col-10">
													<h2>Titulo de la cartica</h2>
												</div>
												<div class="col text-right">
													<a href="" class="btn btn-danger ban-button"><i class="fas fa-ban"></i></a>
												</div>
											</div>
										</div>
										<div class="card-horizontal__body__description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorum voluptas, ullam vero est, aut quo omnis quis beatae magni vitae eveniet impedit hic animi illum rem necessitatibus itaque. Commodi.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- 					@if(!$userbenefits->isEmpty())
						@foreach($userbenefits as $ub)
						<img src="data:image/png;base64,{{ $ub->image }}" alt="new-{{ $ub->id }}" >
						{{ $ub->name }}
						{{ $ub->description }}
						@endforeach
						@endif -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
