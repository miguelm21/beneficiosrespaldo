<nav class="navbar navbar-expand-lg navbar-light sticky-top nav-config">
	<div class="container-fluid u-leftspacing-zero">
		<div class="nav__logo-container">
			<a href="{{ url('/') }}"><div class=""><img src="img/logo/logo_1.png" alt=""></div></a>
		</div> 
		<button class="navbar-toggler nav-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class=""><i class="fas fa-bars fa-2x p-1"></i></span>
		</button>
		<div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
			<ul class="navbar-nav navbar-nav ml-auto">
				<div id="social">
					<a class="nav-icon2 smGlobalBtn" href="#" ><i class="fab fa-facebook-f"></i></a>
					<a class="nav-icon2 smGlobalBtn" href="#" ><i class="fab fa-twitter"></i></a>
					<a class="nav-icon2 smGlobalBtn" href="#" ><i class="fab fa-google"></i></a>
					<a class="nav-icon2 smGlobalBtn" href="#" ><i class="fab fa-instagram"></i></a>
				</div>
				<li class="nav-item">
					<form class="search-navbar">
						<div class="input-group">
							<input type="text" class="format-input no-border m-1 form-control " aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn-search btn bg-transparent nav-link" type="button"> <i class="fas fa-search fa-2x"></i></button>
							</div>
						</div>
					</form>
				</li>
				<li class="nav-item">
					<a href="{!!url('login')!!}" class="btn-edit-login btn-block">Ingresar </a>
				</li>
			</ul>
			


			<ul class="navbar-nav navbar-nav mt-lg-0 navbar-category">
				<li class="nav-item">
					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-utensils nav-icon"> </i> Gastronomia
					</a>
<!-- 					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Restaurantes y bares</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Heladerias</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Deliverys and take away</a>
					</div> -->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-film nav-icon"> </i> Entretenimiento
					</a>
<!-- 					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Cine</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Teatro</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Recitales y conciertos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Infantiles</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Aventura</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Discos y eventos</a>
					</div> -->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-plane nav-icon"> </i> Turismo
					</a>
<!-- 					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Hoteles</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Transporte</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Agencias turisticas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Asistencia al viajero</a>
					</div> -->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-cut nav-icon"> </i> Moda
					</a>
<!-- 					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Mujer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Hombre</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Niño</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Calzado y carteras</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Relojes y Accesorios</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Opticas</a>
					</div> -->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-female nav-icon"> </i> Belleza
					</a>
<!-- 					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Centros esteticos</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Peluquerias</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Gimnasios</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Perfumeria</a>
					</div> -->
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-home nav-icon"> </i> Deco y hogar
					</a>
					<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Tiendas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Muebles</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Baño y cocina</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Jardin y Exterior</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Colchones</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Pinturerias</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Seguros</a>
					</div> -->
				</li>
			</ul>

		</div>


		




	</div>
</nav>