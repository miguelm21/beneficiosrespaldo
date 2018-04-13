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
							<label class="dashboard__label my-3"><b>Datos personales:</b></label>
							<ul class="list-group dashboard__list">
								<a href="" class=""><li class="dashboard__list__button list-group-item">Cupones utilizados</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Cálculo ahorros(Opcional)</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Noticias</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Ayuda</li></a>
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
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 section_profile">
				<div class="container ">
					<h4>Perfil de usuario</h4>
					<form action="" method="">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">Nombre</label>
								<input type="name" class="form-control form-control-lg section_profile__input" id="">
							</div>
							<div class="form-group col-md-6">
								<label for="Apellido">Apellido</label>
								<input type="password" class="form-control form-control-lg section_profile__input" id="Apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="DNI">DNI</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="DNI">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">Telefono</label>
								<input type="name" class="form-control form-control-lg section_profile__input" id="">
							</div>
							<div class="form-group col-md-6">
								<label for="Apellido">Email</label>
								<input type="password" class="form-control form-control-lg section_profile__input" id="Apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">Provincia</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Ciudad</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">Domicilio</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
							</div>
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn button-style section_profile__button">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
