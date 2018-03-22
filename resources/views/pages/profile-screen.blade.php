@extends('template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="logo text-right">
				<a href="">
					<img src="img/Penguins.jpg" width="100px" height="100px" class="back-img mt-4" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-12 nopadding edit-section">
			<div class="row m-0">
				<div class="box-panel-admin">
					<div class="col-12 nopadding">
						<div class="text-center">
							<a href="">
								<img src="img/Penguins.jpg" alt="" class="img-profile m-2">
							</a>
						</div>
					</div>
					<div class="col-12">
						<div class="box-admin">
							<label><b>Datos personales:</b></label>
							<ul class="list-group">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-12 my-3">
						<button type="button" class="btn btn-edit-blue btn-block">Cambiar contraseña</button>
						<button type="button" class="btn btn-danger btn-block">Salir</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-12 edit-section">
			<div class="container">
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="">Nombre</label>
							<input type="name" class="form-control" id="">
						</div>
						<div class="form-group col-md-6">
							<label for="Apellido">Apellido</label>
							<input type="password" class="form-control" id="Apellido">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="DNI">DNI</label>
							<input type="text" class="form-control" id="DNI">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="">Telefono</label>
							<input type="name" class="form-control" id="">
						</div>
						<div class="form-group col-md-6">
							<label for="Apellido">Email</label>
							<input type="password" class="form-control" id="Apellido">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Provincia</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-6">
							<label for="inputCity">Ciudad</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Domicilio</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
					</div>
					<div class="col-12 text-right nopadding">
						<button type="submit" class="btn btn-edit-blue">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection