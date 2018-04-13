@extends('template')

@section('content')
<div class="container-fluid">
	<div class="row m-1">
		<div class="col-lg-3 col-sm-3 col-12 mx-auto nopadding p-3">
			<div class="card my-2">
				<div class="row">
					<div class="box-dashboard-list  p-1">
						<div class="row p-3">
							<div class="col-lg-10 m-lg-auto my-2">
								<div class="form-group">
									<label for="" class="box-dashboard-list__title mb-3">Nombre</label>
									<input class="form-control form-control-lg mr-sm-2 box-dashboard-list__search" type="search" placeholder="" aria-label="Search">
								</div>
								<div class="form-group">
									<label for="" class="box-dashboard-list__title mb-3">Categorias</label>
									<div class="boxes">
										<input type="checkbox" class="checkbox-edit" id="box-1">
										<label for="box-1">Gastronomia</label>

										<input type="checkbox" class="checkbox-edit" id="box-2">
										<label for="box-2">Entretenimiento</label>

										<input type="checkbox" class="checkbox-edit" id="box-3">
										<label for="box-3">Turismo</label>

										<input type="checkbox" class="checkbox-edit" id="box-4">
										<label for="box-4">Moda</label>

										<input type="checkbox" class="checkbox-edit" id="box-5">
										<label for="box-5">Belleza</label>

										<input type="checkbox" class="checkbox-edit" id="box-6">
										<label for="box-6">Deco y hogar</label>
									</div>
								</div>
								<div class="col-12 text-center nopadding">
									<button class="btn btn-block  mt-2 btn-lg">Buscar</button>
								</div>
							</div>
							<!-- <div class="col-lg-9 m-auto my-2">
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
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-sm-9 col-12 p-3">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/gastro_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Gastronomía</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/tourism_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Turismo</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/entertaiment_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Entretenimiento</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/fashion_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Moda</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/home_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Deco y hogar</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/beauty_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Belleza</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/gastro_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Gastronomía</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/tourism_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Turismo</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/entertaiment_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Entretenimiento</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
								<a href="#" class="btn button-style btn-lg pull-right">Ver mas</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 my-2">
						<div class="card-list">
							<img class="card-img-top" height="170" src="img/category/fashion_1.jpg" alt="Gastronomy image">
							<div class="card-body">
								<h5 class="card-list__title">Moda</h5>
								<p class="card-list__text"> make up the bulk of the card's content.</p>
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