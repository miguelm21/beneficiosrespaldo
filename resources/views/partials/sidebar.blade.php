<div class="col-lg-3 col-md-4 nopadding">
	<div class="card m-3">
		<div class="dashboard">
			<div class="col-12 text-center">
				<a href="">
					<img src="{{ asset('images/hero.png') }}" class="dashboard__image-profile" alt="Imagen Perfil Admin" class="img-profile m-2">
				</a>
				<hr>
			</div>
			<div class="col-12 text-left">
					<nav id="leftnav6">
					<h5>Menu</h5>
						<div class="list-group indicator-plus no-seperator">
							<a class="list-group-item" href="{{ route('dashboard-admin' )}}"><i class="fas fa-home" aria-hidden="true"></i> Inicio</a>
							@if(Session::get('role') == 1)
								<a class="list-group-item" data-parent="#leftnav6" data-toggle="collapse" href="#lvl1abcdef"><i class="fas fa-window-maximize" aria-hidden="true"></i> CMS</a>
								<div class="collapse list-group-submenu" id="lvl1abcdef">
									<!-- <a class="list-group-item" data-parent="#lvl1abcdef-sub" data-toggle="collapse" href="#lvl1abcdef-sub"><i class="fa fa-users" aria-hidden="true"></i>Level 2 Link</a>
									<div class="collapse list-group-submenu alt-highlight" id="lvl1abcdef-sub">
										<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user-secret" aria-hidden="true"></i>Level 3 Link</a> 
										<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user-md" aria-hidden="true"></i>Level 3 Link <span class="badge badge-secondary">New</span></a>
										<a class="list-group-item" data-parent="#lvl1abcdef-sub" href="#"><i class="fa fa-user" aria-hidden="true"></i>Level 3 Link <span class="badge badge-primary badge-pill">14</span></a>
									</div> -->
									<a class="list-group-item" href="{{ url('cmsslider') }}"><i class="fas fa-images" aria-hidden="true"></i> Carrusel</a>
									<a class="list-group-item" href="{{ url('cmssocialnetworks') }}"><i class="fas fa-address-card" aria-hidden="true"></i> Redes Sociales</a>
								</div>
								<a class="list-group-item" href="{{ url('categories' )}}"><i class="fas fa-clipboard-list" aria-hidden="true"></i> Categorias</a>
								<a class="list-group-item" href="{{ url('benefits' )}}"><i class="fas fa-gift" aria-hidden="true"></i> Beneficios</a>

								<!-- <a class="list-group-item" data-parent="#leftnav6" data-toggle="collapse" href="#lvl1bbcdef"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Administrador 2</a>
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
								</div> -->
							@endif
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
						<a href="{{ route('editprofile', Auth::id()) }}" class="btn dashboard__button btn-block btn-lg"">Editar Perfil </a>
					</div>
					<div class="col-12 my-1">
						<a href="{{ route('editpassword') }}" class="btn dashboard__button btn-block btn-lg"">Cambiar Contraseña </a>
					</div>
					<div class="col-12 my-1">
						<a href="{{ url('logout') }}" class="btn dashboard__button btn-danger btn-block btn-lg">Salir</a>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div>