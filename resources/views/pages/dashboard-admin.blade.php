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
		<div class="col-lg-3 col-md-4 nopadding">
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
							<label><b>Administrador home:</b></label>
							<ul class="list-group">
								<li class="list-group-item">Administrador 1</li>
								<li class="list-group-item">Administrador 2</li>
								<li class="list-group-item">Administrador 3</li>
								<li class="list-group-item">Administrador 4</li>
								<li class="list-group-item">Administrador 5</li>
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
		<div class="col-lg-9 col-md-8 col-12">
			<div class="edit-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-12">
									<a href=" circle-buttom">	
										<div class="circle d-none d-md-block d-lg-block blue">
											<h5>Beneficios activos</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1 blue btn-lg my-2">Beneficios activos</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<a href=" circle-buttom">
										<div class="circle d-none d-md-block d-lg-block green">
											<h5>Cupones utilizados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1 green btn-lg my-2">Cupones utilizados</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<a href="circle">
										<div class="circle d-none d-md-block d-lg-block purple">
											<h5>Usuarios registrados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1 purple btn-lg my-2">Usuarios registrados</a>
									</div>
								</div>
							</div>
							<div class="row mt-5 text-center">
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 col-sm-6 p-2">
									<a href="" class="btn button-style btn-block padding-button">Administrador 3</a>
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