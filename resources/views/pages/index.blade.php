@extends('template')

@section('content')
	<!-- Hero -->
	<div class="container-fluid">
		<div class="hero-section">
			<div class="hero-section-text">
				<h1>club uno</h1>
				<h5>Expertos en OCIO, pedi tu tarjeta ya.</h5>
			</div>
		</div>
	</div>

	<!-- Section title -->
	<div class="container-fluid">
		<h1 class="section__title">Los mas Populares</h1>
		<hr class="section__title-separator">
	</div>
	<!-- Main -->
	<div class="content__ranking container-fluid mt-5">
		<div class="box-index">
			<div class="row">
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<i class="fas fa-utensils fa-6x"></i>
						<h4 class="mt-4">GASTRONOMIA</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
					<i class="fas fa-film fa-6x"></i>
						<h4 class="mt-4">ENTRETENIMIENTO</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
					<i class="fas fa-plane fa-6x"></i>
						<h4 class="mt-4">TURISMO</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
					<i class="fas fa-cut fa-6x"></i>
						<h4 class="mt-4">MODA</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
					<i class="fas fa-female fa-6x"></i>
						<h4 class="mt-4">BELLEZA</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-sm-4 col-lg-2 col-6 text-center mt-2">
					<div class="card">
					<i class="fas fa-home fa-6x"></i>
						<h4 class="mt-4">DECO Y HOGAR</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Section title -->
	<div class="container-fluid">
		<h1 class="section__title">Los mas Buscados</h1>
		<hr class="section__title-separator">
	</div>
	<!-- Most searched sites -->
	<div class="container-fluid mt-4">
		
		<div class="carousel-container mt-5">
			<div id="slider-carousel" class="owl-carousel">
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-3.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Nombreaaaaaaaaaa</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ex!</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-4.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar A</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, natus. </p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-1.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 chabracter-->
						<h5>Titulo a Mostrar B</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, eaque.</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-2.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar C</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, aspernatur. </p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-3.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar D</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, repellendus!</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-4.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar E</h5>
					</div>
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
			<div class="customNavigation">
				<a class="btn gray prev"><i class="icon ion-ios-arrow-left"></i></a>
				<a class="btn gray next"><i class="icon ion-ios-arrow-right"></i></a>
			</div>
		</div>
	</div>

	<!-- New benefits -->

	<div class="container my-3">
		<div class="row">
			<div class="col-12 text-center">
				<h3>Nuevos Beneficios</h3>
			</div>
		</div>
		<div class="row my-4">
			<div class="owl-carousel" id="owl-carousel2">
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>  
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-2.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-3.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-4.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-5.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection