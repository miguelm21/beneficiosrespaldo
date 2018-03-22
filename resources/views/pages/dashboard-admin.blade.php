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
		<div class="col-lg-9 col-md-8 col-12">
			<div class="edit-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-lg-4 col-md-4 col-12 nopadding">
									<a href=" circle-buttom">	
										<div class="circle d-none d-md-block d-lg-block" id="blue">
											<h5>Beneficios activos</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1" id="blue">Beneficios activos</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12 nopadding">
									<a href=" circle-buttom">
										<div class="circle d-none d-md-block d-lg-block" id="green">
											<h5>Cupones utilizados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1" id="green">Cupones utilizados</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12 nopadding">
									<a href=" circle-buttom">
										<div class="circle d-none d-md-block d-lg-block" id="purple">
											<h5>Usuarios registrados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="btn btn-block my-1" id="purple">Usuarios registrados</a>
									</div>
								</div>
							</div>
							<div class="row mt-5 text-center">
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 1</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 2</a>
								</div>
								<div class="col-lg-4 col-6 p-2">
									<a href="" class="btn btn-edit-blue btn-block padding-button">Administrador 3</a>
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