@extends('template')

	<head><script type="text/javascript">var centreGot = false;</script>
	<?php echo $map['js']; ?></head>
	
	@section('content')

	<div class="container-fluid container-edit closet-container">
		<div class="row">
			<div class="col-12">
				<div class="logo text-right">
				<!-- <a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a> -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-12">
			<div class="row">
				<div class="card box-benefits mx-3">
					<div class="p-3">
						<div class="col-lg-10 m-lg-auto col-md-6 m-md-auto  box-km">
							<form action="{{ route('closet-benefits') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
								<div class="form-group form-inline">
									<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
									<div class="col-lg-8 col-md-8 col-12">
										<input class="form-control form-control-lg w-100" type="number" min="1" step="1" value="{{ $km }}" name="km">
									</div>
									<div class="col-lg-4 col-md-4 col-12 text-center nopadding">
										<label for="form-control text-center">Km</label>
									</div>
									<div class="col-12 my-1">
										<button type="submit" class="btn btn-block button-style">Aplicar</button>
									</div>
								</div>
							</form>
						</div>
						<hr>
						<div class="box-panel-closest">
							<div class="row">
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/gastro_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Gastronomía</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/entertaiment_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Entretenimiento</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/tourism_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Turismo</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/beauty_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Belleza</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-12">
			<div class="row my-5">
				<div class="col-sm-12 m-sm-auto col-lg-11 m-lg-auto">
					<div class="form-group">
						<div class="row">
							@foreach($categories as $c)
								<div class="col-lg-3 col-sm-4 col-12 my-1">
									<input type="checkbox" name="cat[]" value="{{ $c->id }}" class="checkbox-edit" id="box-{{ $c->id }}">
									<label for="box-{{ $c->id }}">{{ $c->name }}</label>
								</div>
								
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="box-img-gps">
						<!-- <img src="images/gps-2.jpg" class="gps-img" alt=""> -->
						<div class="box-img-gps__gps"><?php echo $map['html']; ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection