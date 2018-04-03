@extends('template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="logo text-right">
				<a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-sm-3 col-10 mx-auto nopadding">
			<div class="row m-0">
				<div class="border-closest p-1">
					<div class="row">
						<div class="col-lg-9 mx-lg-auto  my-3">
							<div class="custom-control custom-radio" size="3" >
								<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								<label class="custom-control-label custom-radio-post ml-3" for="customRadio1">Basic (Default)</label>
							</div>
							<div class="custom-control custom-radio" size="3" >
								<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
								<label class="custom-control-label custom-radio-post ml-3" for="customRadio2">Premium</label>
							</div>
							<div class="custom-control custom-radio" size="3" >
								<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
								<label class="custom-control-label custom-radio-post ml-3" for="customRadio3">Black</label>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-lg-9 m-lg-auto my-2">
							<div class="form-group">
								<select id="inputState" class="form-control form-control-lg">
									<option selected>Categorias</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
								</select>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block button-style text-center mt-2 btn-lg">Aplicar</button>
								</div>
							</div>
						</div>
						<div class="col-lg-9 m-auto my-2">
							<div class="form-group">
								<select id="inputState" class="form-control form-control-lg">
									<option selected>Franquicias</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
								</select>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block button-style text-center mt-2 btn-lg">Aplicar</button>
								</div>
							</div>
						</div>
						<div class="col-lg-9 m-auto my-2">
							<div class="form-group">
								<select id="inputState" class="form-control form-control-lg">
									<option selected>Dias</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
								</select>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block button-style text-center mt-2 btn-lg">Aplicar</button>
								</div>
							</div>
						</div>
						<div class="col-lg-9 m-auto my-2">
							<div class="form-group">
								<select id="inputState" class="form-control form-control-lg">
									<option selected>Oferta</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
								</select>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block button-style text-center mt-2 btn-lg">Aplicar</button>
								</div>
							</div>
						</div>
						<div class="col-lg-9 m-auto my-2">
							<div class="scroll-box">
								<select class="custom-select" size="3">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
									<option value="4">Fourth</option>
								</select>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block button-style text-center mt-2 btn-lg">Aplicar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-sm-9 col-12 border-closest2 p-3 mb-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/gastro_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Gastronomía</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/tourism_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Turismo</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/entertaiment_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Entretenimiento</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/fashion_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Moda</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/home_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Deco y hogar</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/beauty_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Belleza</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/gastro_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Gastronomía</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/tourism_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Turismo</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/entertaiment_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Entretenimiento</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card">
							<img class="card-img-top" height="170" src="img/category/fashion_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-title">Moda</h5>
								<p class="card-text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection