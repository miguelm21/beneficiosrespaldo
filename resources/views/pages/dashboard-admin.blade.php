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
					<div class="col-12 text-left">
							<nav id="leftnav6">
							<h5>Administradores</h5>
								<div class="list-group indicator-plus no-seperator">
									<a class="list-group-item" data-parent="#leftnav6" data-toggle="collapse" href="#lvl1abcdef"><i class="fa fa-user" aria-hidden="true"></i>Administrador 1</a>
									<div class="collapse list-group-submenu" id="lvl1abcdef">
										<a class="list-group-item" data-parent="#lvl1abcdef-sub" data-toggle="collapse" href="#lvl1abcdef-sub"><i class="fa fa-users" aria-hidden="true"></i>Level 2 Link</a>
										<div class="collapse list-group-submenu alt-highlight" id="lvl1abcdef-sub">
											<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user-secret" aria-hidden="true"></i>Level 3 Link</a> 
											<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user-md" aria-hidden="true"></i>Level 3 Link <span class="badge badge-secondary">New</span></a>
											<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user" aria-hidden="true"></i>Level 3 Link <span class="badge badge-primary badge-pill">14</span></a>
										</div>
										<a class="list-group-item" href="#"><i class="fa fa-line-chart" aria-hidden="true"></i>Level 2 Link</a>
										<a class="list-group-item" href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>Level 2 Link</a>
									</div>
									<a class="list-group-item" data-parent="#leftnav6" data-toggle="collapse" href="#lvl1bbcdef"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Administrador 2</a>
									<div class="collapse list-group-submenu" id="lvl1bbcdef">
										<a class="list-group-item" href="">Level 2 Link</a>
										<a class="list-group-item" href="">Level 2 Link</a> 
										<a class="list-group-item" href="">Level 2 Link</a>
									</div>
									<a class="list-group-item" href="#lvl1cbf"><i class="fa fa-car" aria-hidden="true"></i>Administrador 3</a>
									<a class="list-group-item" data-parent="#leftnav6" data-toggle="collapse" href="#lvl1dbcdef"><i class="fa fa-id-card" aria-hidden="true"></i>Level 1 Link</a>
									<div class="collapse list-group-submenu" id="lvl1dbcdef">
										<a class="list-group-item" href="">Level 2 Link</a>
										<a class="list-group-item" href="">Level 2 Link</a>
										<a class="list-group-item" href="">Level 2 Link</a>
									</div>
								</div>
							</nav>
<!-- 						<div class="text-center my-4">
							<label class="dashboard__label my-3"><b>Administrador home:</b></label>
							<ul class="list-group dashboard__list">
								<a href="#demo" data-toggle="collapse"><li class="dashboard__list__button list-group-item">Administrador 1
								</li></a>
									<div id="demo" class="collapse">
										<ul class="list-group">
											<li style="list-style: none;"><a href="#" class="ml-5">Beneficio 1</a></li>
										</ul>
									</div>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 2</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 3</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 4</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 5</li></a>
							</ul>
						</div> -->
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