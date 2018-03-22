@extends('template')

@section('content')
<div class="container">
	<div class="box-benefits">
		<div class="row">
			<div class="col-lg-5 col-12 my-2">
				<div class="card border-primary">
					<div class="card p-2">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5> 
					      <p class="card-text edit-card">This is a wider carasdasdasdasdasd with supp</p>
					    </div>
						<div class="card-footer border-transparent bg-transparent">
							<div class="d-flex">
								<div class="custom-control custom-checkbox mx-1">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Basic</label>
								</div>
								<div class="custom-control custom-checkbox mx-1">
									<input type="checkbox" class="custom-control-input" id="customCheck2">
									<label class="custom-control-label" for="customCheck2">Premium</label>
								</div>
								<div class="custom-control custom-checkbox mx-1">
									<input type="checkbox" class="custom-control-input" id="customCheck3">
									<label class="custom-control-label" for="customCheck3">Black</label>
								</div>
							</div>
							<div class="row align-bottom mt-2">
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">LUN</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">MAR</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">MIE</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">JUE</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">VIE</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">SAB</span>
								</div>
								<div class="col-lg col-3 text-center nopadding nomargin">
									<span class="btn btn-block btn-light b-radius">DOM</span>
								</div>
							</div>
						</div>
					  </div>
				</div>
				<div class="flex">
					<a class="social-benefits" href="#"><i class="fab fa-instagram"></i></a>
					<a class="social-benefits" href="#"><i class="fab fa-twitter-square"></i></a>
					<a class="social-benefits" href="#"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
			<div class="col-lg-7 col-12 my-2">
				<div id="carouselExampleIndicators" class="carousel slide edit-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 size" src="img/coupons/coupons-6.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 size" src="img/coupons/coupons-7.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 size" src="img/coupons/coupons-5.png" alt="Third slide">
						</div>
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
		</div>
		<!-- Term and condition -->
		<div class="box-center">
			<div class="row">
				<div class="col-lg-6 col-12 mt-2 text-center">
					<button type="button" class="btn-benefit" data-dismiss="modal">Vigencia</button>
				</div>
				<div class="col-lg-6 col-12 mt-2 text-center">
					<button type="button" class="btn-benefit" data-dismiss="modal">Mas beneficios de esta franquicia</button>
				</div>
			</div>
			<div class="center-text">
				<div class="row">
					<div class="text-center col-12">
						<h4>Terminos y condiciones</h4>
					</div>
					<div class="col-12 mt-2 text-justify">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae deserunt voluptates expedita tenetur aliquam quam laborum totam a, officiis assumenda rerum voluptatibus? Natus temporibus alias, cupiditate aliquam ipsa sunt deleniti!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur atque neque voluptatem, hic quae minus, suscipit omnis, velit libero repellendus iusto porro assumenda voluptate pariatur architecto tempore laboriosam deserunt quis.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection