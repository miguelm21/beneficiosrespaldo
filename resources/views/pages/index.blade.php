@extends('template')

@section('content')
<!-- Hero -->
<div class="container-fluid nopadding">
	<div class="carousel-father">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!-- 			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol> -->
			<div class="carousel-inner carousel-father__carousel-inner">
				<div class="hero-section-text">
					<img src="{{ asset('img/logo/logo_1.png') }}" alt="Club Beneficio">
					<h3>Pedí tu tarjeta YA!</h3>
					<a class="hero-section-text__btn btn btn-primary" href="{{ url('closet-benefits') }}" role="button">Cercanos a mí</a>
				</div>
				@if($fslider)
				<div class="carousel-item carousel-father__carousel-item active">
					<div class="carousel-father__carousel-sticker">
					</div>
					<img class="d-block w-100 carousel-father__img-carousel" src="data:image/png;base64, {{ $fslider->image }}" alt="First slide">
				</div>
				@else
				<div class="carousel-item carousel-father__carousel-item active">
					<div class="carousel-father__carousel-sticker">
					</div>
					<img class="d-block w-100 carousel-father__img-carousel" src="img/category/tourism_1.jpg" alt="First slide">
				</div>
				@endif
				@if(!$slider->isEmpty())
				@foreach($slider as $s)
				<div class="carousel-item carousel-father__carousel-item">
					<div class="carousel-father__carousel-sticker">
					</div>
					<img class="d-block w-100 carousel-father__img-carousel" src="data:image/png;base64, {{ $s->image }}" alt="Second slide">
				</div>
				@endforeach
				@elseif(!$fslider)
				<div class="carousel-item carousel-father__carousel-item">
					<div class="carousel-father__carousel-sticker">
					</div>
					<img class="d-block w-100 carousel-father__img-carousel" src="img/category/fashion_1.jpg" alt="Second slide">
				</div>
				<div class="carousel-item carousel-father__carousel-item">
					<div class="carousel-father__carousel-sticker">
					</div>
					<img class="d-block w-100 carousel-father__img-carousel" src="img/category/news_1.jpg" alt="Third slide">
				</div>
				@endif
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<!-- 	<div class="hero-section">
		<div class="hero-section-text">
			<h1>club uno</h1>
			<h5>Expertos en OCIO, pedi tu tarjeta ya.</h5>
			<a class="hero-section__btn btn btn-primary" href="{{ url('closet-benefits') }}" role="button">Cercanos a mí</a>
		</div>
	</div> -->
</div>

<!-- Main -->

<div class="container-fluid my-5">

	@if(!$categories->isEmpty())
	@foreach($categories as $c)
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg {{ $c->iconweb }} fa-6x"></i>
					<h3 class="title_category__title">{{ $c->name }}</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			{{ $benefits[$c->id]->count() }}
			@foreach($benefits[$c->id] as $b)
			@if($b)
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="data:image/png;base64, {{ $b->image }}" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>{{ $b->description }}</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	
	@endforeach
	
	@else
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-utensils fa-6x"></i>
					<h3 class="title_category__title">GASTRONOMÍA</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-film fa-6x"></i>
					<h3 class="title_category__title">ENTRETENIMIENTO</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/entertaiment_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-plane fa-6x"></i>
					<h3 class="title_category__title">TURISMO</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/tourism_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-cut fa-6x"></i>
					<h3 class="title_category__title">MODA</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/fashion_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-female fa-6x"></i>
					<h3 class="title_category__title">BELLEZA</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/beauty_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
	</div>
	<div class="card mt-3">
		<div class="title-category">
			<div class="row">
				<div class="col-lg-12 d-flex">
					<i class="title_category__svg fas fa-home fa-6x"></i>
					<h3 class="title_category__title">DECO Y HOGAR</h3>
				</div>
			</div>
		</div>
		<div class="owl-carousel" id="owl-carousel22">
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="ranking-item-father">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-item__image-container">
							<img class="ranking-item__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item__image-container__sticker">
								<div class="ranking-item__image-container__sticker-text">
									<span>30%</span>
								</div>
							</div>
						</div>

					</a>
				</div>
				<div class="ranking-item-back">
					<a href="#">
						<div class="ranking-item-back__image-container">
							<img class="ranking-item-back__image-container__image img-fluid" src="img/category/home_1.jpg" alt="gastro-1" >
							<div class="ranking-item-back__image-container__sticker">
								<div class="ranking-item-back__image-container__sticker-text">
									<span>Beneficio descripcion corta. Pequeño preview</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="ranking-item">
			<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
		</div>
		@endif
	</div>
</div>

	
<!-- 	<div class="box-index">
		<div class="mt-5">
			<div class="card">
				<i class="fas fa-home fa-6x"></i>
				<h3 class="card-title">DECO Y HOGAR</h3>
				<div class="row">
					<div class="col-sm-4 text-center mt-5">
						<div class="ranking-item-father">

							<div class="ranking-item">
								<a href="#">
									<div class="ranking-item__image-container">
										<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item__image-container__sticker">
											<div class="ranking-item__image-container__sticker-text">
												<span>30%</span>
											</div>
										</div>
									</div>
									<h3 class="ranking-item__title">Beneficio 1</h3>
								</a>
							</div>

							<div class="ranking-item-back">
								<a href="#">
									<div class="ranking-item-back__image-container">
										<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item-back__image-container__sticker">
											<div class="ranking-item-back__image-container__sticker-text">
												<span>Beneficio descripcion corta. Pequeño preview</span>
											</div>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>

					<div class="col-sm-4 text-center mt-5">
						<div class="ranking-item-father">

							<div class="ranking-item">
								<a href="#">
									<div class="ranking-item__image-container">
										<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item__image-container__sticker">
											<div class="ranking-item__image-container__sticker-text">
												<span>30%</span>
											</div>
										</div>
									</div>
									<h3 class="ranking-item__title">Beneficio 2</h3>
								</a>
							</div>

							<div class="ranking-item-back">
								<a href="#">
									<div class="ranking-item-back__image-container">
										<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item-back__image-container__sticker">
											<div class="ranking-item-back__image-container__sticker-text">
												<span>Beneficio descripcion corta. Pequeño preview</span>
											</div>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>

					<div class="col-sm-4 text-center mt-5">
						<div class="ranking-item-father">

							<div class="ranking-item">
								<a href="#">
									<div class="ranking-item__image-container">
										<img class="ranking-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item__image-container__sticker">
											<div class="ranking-item__image-container__sticker-text">
												<span>30%</span>
											</div>
										</div>
									</div>
									<h3 class="ranking-item__title">Beneficio 3</h3>
								</a>
							</div>

							<div class="ranking-item-back">
								<a href="#">
									<div class="ranking-item-back__image-container">
										<img class="ranking-item-back__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
										<div class="ranking-item-back__image-container__sticker">
											<div class="ranking-item-back__image-container__sticker-text">
												<span>Beneficio descripcion corta. Pequeño preview</span>
											</div>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>

				</div>

				<div class="ranking-item">
					<a class="btn btn-primary mt-2" href="{{ url('list-benefits') }}" role="button">Ver más...</a>
				</div>
			</div>
		</div>
	</div> -->
</div>

<!-- Section title -->
<div class="container-fluid">
	<h1 class="section__title">Los mas Buscados</h1>
	<hr class="section__title-separator">
</div>
<!-- Most searched sites -->
<div class="container mt-4">
	<div class="carousel-container mt-5">
		<div id="slider-carousel" class="owl-carousel">
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img class="img-shop" src="img/sities/sities-1.png">
				</a>

				<div class="box-description">
					<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
				</div>
				<div class="align-bottom">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img src="img/sities/sities-4.png">
				</a>
				<div class="box-description">
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="align-bottom">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img src="img/sities/sities-1.png">
				</a>
				<div class="box-description">
					<p>Lorem ipsum dolor sit amet</p>
				</div>
				<div class="align-bottom">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img src="img/sities/sities-2.png">
				</a>
				<div class="box-description">
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="align-bottom">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img src="img/sities/sities-1.png">
				</a>
				<div class="box-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, repellendus!</p>
				</div>
				<div class="align-bottom">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
			<div class="item item-edit shops__container">
				<a class="hoverfx" href="#">
					<div class="overlay">
					</div>
					<img src="img/sities/sities-4.png">
				</a>
				<div class="box-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, praesentium!</p>
				</div>
				<div class="">
					<ul class="rating">
						<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid">
	<h1 class="section__title">Nuevos Beneficios</h1>
	<hr class="section__title-separator">
</div>
<!-- New benefits -->

<div class="container my-3">
	<div class="row my-4">
		<div class="owl-carousel" id="owl-carousel2">
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-item">
						<a href="#">
							<div class="card-item__image-container">
								<img class="card-item__image-container__image img-fluid" src="images/ranking/gastro_1.jpg" alt="gastro-1" >
								<div class="card-item__image-container__sticker">
									<div class="card-item__image-container__sticker-text">
										<span>2x1</span>
									</div>
								</div>
							</div>
							<h4 class="card-item__title">Beneficio 5</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<h1 class="section__title">Noticias</h1>
	<hr class="section__title-separator">
</div>

<div class="container my-3">
	<div class="row my-4">
		@if(!$news->isEmpty())
		@foreach($news as $n)
		<div class="col-sm-6">
			<div class="card">
				<div class="news-item">
					<a href="{{ route('article', $n->id) }}">
						<div class="news-item__image-container">
							<!-- <img class="news-item__image-container__image img-fluid" src="" alt="gastro-1" > -->
							<img class="news-item__image-container__image img-fluid" src="data:image/png;base64, {{ $n->image }}" alt="news-{{ $n->id }}">
							<div class="news-item__image-container__sticker">
								<div class="news-item__image-container__sticker-text">
									<span>{{ $n->title }} </span>
								</div>
							</div>
						</div>
						<h4 class="news-item__autor">{{ $n->user->name }}</h4>
						<h4 class="news-item__date">{{ date('d-m-Y', strtotime($n->date)) }}</h4>
					</a>
				</div>
			</div>
		</div>
		@endforeach
		<a href="{{ route('blog') }}">Ver todas las noticias</a>
		@else
		<div class="col-sm-6">
			<div class="card">
				<div class="news-item">
					<a href="#">
						<div class="news-item__image-container">
							<img class="news-item__image-container__image img-fluid" src="images/news/news_1.jpg" alt="gastro-1" >
							<div class="news-item__image-container__sticker">
								<div class="news-item__image-container__sticker-text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
						<h4 class="news-item__autor">Admin</h4>
						<h4 class="news-item__date">15/08/2016</h4>
					</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="card">
				<div class="news-item">
					<a href="#">
						<div class="news-item__image-container">
							<img class="news-item__image-container__image img-fluid" src="images/news/news_1.jpg" alt="gastro-1" >
							<div class="news-item__image-container__sticker">
								<div class="news-item__image-container__sticker-text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
						<h4 class="news-item__autor">Admin</h4>
						<h4 class="news-item__date">15/08/2016</h4>
					</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="card">
				<div class="news-item">
					<a href="#">
						<div class="news-item__image-container">
							<img class="news-item__image-container__image img-fluid" src="images/news/news_1.jpg" alt="gastro-1" >
							<div class="news-item__image-container__sticker">
								<div class="news-item__image-container__sticker-text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
						<h4 class="news-item__autor">Admin</h4>
						<h4 class="news-item__date">15/08/2016</h4>
					</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="card">
				<div class="news-item">
					<a href="#">
						<div class="news-item__image-container">
							<img class="news-item__image-container__image img-fluid" src="images/news/news_1.jpg" alt="gastro-1" >
							<div class="news-item__image-container__sticker">
								<div class="news-item__image-container__sticker-text">
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </span>
								</div>
							</div>
						</div>
						<h4 class="news-item__autor">Admin</h4>
						<h4 class="news-item__date">15/08/2016</h4>
					</a>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>

@endsection

