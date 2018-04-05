@extends('template')

@section('content')
<div class="container">
	<div class="box-benefits">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-12 col-12 my-2">
				<div class="card p-2">
					<div class="card-body">
						<h5 class="box-benefits__title mb-3">Turismo</h5> 
						<p class="box-benefits__text">This is a widadasdasdasdasdassadasdasdasdeasdasdasdasdasdasdasdasdasdasdasdadasds sd asdasdasdasdasdasdasdasdassdsadasdasdasdasdasdadasdsaasdasdasdasdaasdasdasdasdasdasdasdasdasdasdasdasdasdasdasssssssssssssssssssssssssssssssssssssssssssssss</p>
					</div>
					<div class="card-footer border-transparent bg-transparent">
						<div class="d-flex">
							<div class="custom-control custom-checkbox mx-1">
								<input type="checkbox" class="custom-control-input " id="customCheck1">
								<label class="custom-control-label box-benefits__custom-checkbox ml-2" for="customCheck1">Basic</label>
							</div>
							<div class="custom-control custom-checkbox mx-1">
								<input type="checkbox" class="custom-control-input " id="customCheck2">
								<label class="custom-control-label box-benefits__custom-checkbox ml-2" for="customCheck2">Premium</label>
							</div>
							<div class="custom-control custom-checkbox mx-1">
								<input type="checkbox" class="custom-control-input " id="customCheck3">
								<label class="custom-control-label box-benefits__custom-checkbox ml-2" for="customCheck3">Black</label>
							</div>
						</div>
						<div class="inputs">
							<div class="area">
								<div class="row">
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-1">Lun</label>
											<input type="checkbox" name="checkbox" id="checkbox-1">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-2">Mar</label>
											<input type="checkbox" name="checkbox" id="checkbox-2">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-3">Mier</label>
											<input type="checkbox" name="checkbox" id="checkbox-3">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-4">Jue</label>
											<input type="checkbox" name="checkbox" id="checkbox-4">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-5">Vie</label>
											<input type="checkbox" name="checkbox" id="checkbox-5">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-6">Sab</label>
											<input type="checkbox" name="checkbox" id="checkbox-6">
										</span>
									</div>
									<div class="col-3 col-lg col-md p-1">
										<span class="input">
											<label for="checkbox-7">Dom</label>
											<input type="checkbox" name="checkbox" id="checkbox-7">
										</span>
									</div>
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
			<div class="col-lg-7 col-md-6 col-sm-12 col-12 my-2 container-carousel">
				<div id="carouselExampleIndicators" class="carousel slide container-carousel__edit-carousel " data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 container-carousel__size" src="img/category/tourism_1.jpg" alt="Turismo">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 container-carousel__size" src="img/category/news_1.jpg" alt="Noticias">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 container-carousel__size" src="img/category/gastro_1.jpg" alt="Gastronomía">
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
		<div class="box-terms">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-12 mt-2 text-center">
					<button type="button" class="box-terms__button" data-dismiss="modal">Vigencia</button>
				</div>
				<div class="col-lg-6 col-sm-6 col-12 mt-2 text-center">
					<button type="button" class="box-terms__button" data-dismiss="modal">Mas beneficios de esta franquicia</button>
				</div>
			</div>
			<div class="box-terms__container-terms">
				<div class="row">
					<div class="text-center col-12">
						<h3 class="box-terms__container-terms__title mb-4"><b>Terminos y condiciones</b></h3>
					</div>
					<div class="col-12 mt-2 text-justify">
						<p class="box-terms__container-terms__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae deserunt voluptates expedita tenetur aliquam quam laborum totam a, officiis assumenda rerum voluptatibus? Natus temporibus alias, </p>
						<p class="box-terms__container-terms__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae deserunt voluptates expedita tenetur aliquam quam laborum totam a, officiis assumenda rerum voluptatibus? Natus temporibus alias, </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection