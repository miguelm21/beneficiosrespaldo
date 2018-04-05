@extends('template')

@section('content')
<div class="container-fluid">
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
			<div class="row m-0">
				<div class="dashboard border-closest">
					<div class="col-12">
						<div class="text-center">
							<a href="">
								<img src="images/hero.png" class="dashboard__image-profile" alt="Imagen Perfil Admin" class="img-profile m-2">
							</a>
						</div>
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
		<div class="col-lg-9 col-md-8 col-12 border-closest2">
			<div class="p-3">
				<div class="container">
					<div class="row ">
						<div class="col-12 content-admin">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-12">
									<a href="circle-buttom">	
										<div class="circle text-center content-admin__circle circle-first d-none d-md-block d-lg-block blue">
											<h5>Beneficios activos</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="content-admin__button-circle circle-first btn btn-block my-1 blue btn-lg my-2">Beneficios activos</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<a href=" circle-buttom">
										<div class="circle text-center content-admin__circle circle-second d-none d-md-block d-lg-block green">
											<h5>Cupones utilizados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="content-admin__button-circle circle-second btn btn-block my-1 green btn-lg my-2">Cupones utilizados</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<a href="circle">
										<div class="circle text-center content-admin__circle circle-third d-none d-md-block d-lg-block purple">
											<h5>Usuarios registrados</h5>
										</div>
									</a>
									<div class="d-block d-sm-none d-sm-block d-md-none">
										<a href="" class="content-admin__button-circle circle-third btn btn-block my-1 purple btn-lg my-2">Usuarios registrados</a>
									</div>
								</div>
							</div>
							<div class="row text-center box-admin">
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-first content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-first content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-first content-admin__button btn-block">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-second content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-second content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-second content-admin__button btn-block">Administrador 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-12 p-2">
									<a href="" class="circle-third content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-third content-admin__button btn-block">Administrador 3</a>
									<a href="" class="circle-third content-admin__button btn-block">Administrador 3</a>
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