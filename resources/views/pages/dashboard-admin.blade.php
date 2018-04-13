@extends('template')

@section('content')
<div class="container-fluid container-edit">
<!-- 	<div class="row">
		<div class="col-12">
			<div class="logo text-right">
				<a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a>
			</div>
		</div>
	</div> -->
	<div class="row my-1">
		<div class="col-lg-3 col-md-4 nopadding">
			<div class="card m-3">
				<div class="dashboard">
					<div class="col-12 text-center">
						<a href="">
							<img src="images/hero.png" class="dashboard__image-profile" alt="Imagen Perfil Admin" class="img-profile m-2">
						</a>
						<hr>
					</div>
					<div class="col-12">
						<div class="text-center my-4">
							<label class="dashboard__label my-3"><b>Administrador home:</b></label>
							<ul class="list-group dashboard__list">
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 1</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 2</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 3</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 4</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 5</li></a>
							</ul>
						</div>
					</div>
					<hr>
					<div class="col-12">
						<div class="row">
							<div class="col-12 my-1">
								<button type="button" class="btn dashboard__button btn-block btn-lg">Cambiar contraseña</button>
							</div>
							<div class="col-12 my-1">
								<button type="button" class="btn dashboard__button btn-danger btn-block btn-lg">Salir</button>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-12"">
			<div class="p-3">
				<div class="container">
					<div class="row ">
						<div class="col-12 content-admin">
							<div class="row">
								<div class="col-sm-6 col-lg-4 col-12">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Beneficios Activos</h3>
								</div>
								<div class="col-sm-6 col-lg-4 col-12">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Cupones utilizados</h3>
								</div>
								<div class="col-sm-6 col-sm-6 m-sm-auto col-lg-4 col-12 text-center">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Usuarios registrados</h3>
								</div>
							</div>
							<div class="row text-center box-admin">
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 1</a>
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 2</a>
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 1</a>
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 2</a>
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-12 p-2">
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 1</a>
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 2</a>
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 3</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection