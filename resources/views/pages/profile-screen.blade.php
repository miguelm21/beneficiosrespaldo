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
		<div class="col-lg-3 col-sm-4 col-md-4 nopadding">
			<div class="row m-0">
				<div class="w-100">
					<div class="col-12">
						<div class="text-center">
							<a href="">
								<img src="images/img-profile.png" alt="" class="img-profile m-2">
							</a>
						</div>
						<hr>
					</div>
					<div class="col-12">
						<div class="box-admin">
							<label><b>Datos personales:</b></label>
							<ul class="list-group">
								<li class="list-group-item">Cupones utilizados</li>
								<li class="list-group-item">Calculos ahorro (opcional)</li>
								<li class="list-group-item">Noticias</li>
								<li class="list-group-item">Ayuda</li>
							</ul>
						</div>
					</div>
					<div class="col-12 my-3">
						<button type="button" class="btn button-style btn-block btn-lg">Cambiar contraseña</button>
						<button type="button" class="btn btn-danger btn-block btn-lg">Salir</button>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-lg-9 col-sm-8 col-12 edit-section">
			<div class="container">
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="">Nombre</label>
							<input type="name" class="form-control form-control-lg" id="">
						</div>
						<div class="form-group col-md-6">
							<label for="Apellido">Apellido</label>
							<input type="password" class="form-control form-control-lg" id="Apellido">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="DNI">DNI</label>
							<input type="text" class="form-control form-control-lg" id="DNI">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="">Telefono</label>
							<input type="name" class="form-control form-control-lg" id="">
						</div>
						<div class="form-group col-md-6">
							<label for="Apellido">Email</label>
							<input type="password" class="form-control form-control-lg" id="Apellido">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Provincia</label>
							<input type="text" class="form-control form-control-lg" id="inputCity">
						</div>
						<div class="form-group col-md-6">
							<label for="inputCity">Ciudad</label>
							<input type="text" class="form-control form-control-lg" id="inputCity">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Domicilio</label>
							<input type="text" class="form-control form-control-lg" id="inputCity">
						</div>
					</div>
					<div class="col-12 text-right nopadding">
						<button type="submit" class="btn button-style">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection