
<nav class="navbar navbar-expand-lg navbar-light nav-config">
	<div class="container-fluid u-leftspacing-zero">
		<div class="col nopadding">
			<div class="nav__logo-container">
				<a href="{{ url('/') }}"><div class=""><img src="{{ asset('img/logo/logo_1.png') }}" alt=""></div></a>
			</div> 
		</div>
		<button class="navbar-toggler nav-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class=""><i class="fas fa-bars fa-2x p-1"></i></span>
		</button>
		<div class="collapse navbar-collapse mb-4 mb-lg-0" id="navbarSupportedContent" style="width: 80%;">
			<div class="row" style="width: 100% !important; margin: auto;">
				<div class="col-12 nav-config__hide">
					<div id="owl-carousel3" class="owl-carousel">
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Gastronomia</a>
						</div>
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Entretenimiento</a>
						</div>
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Turismo</a>
						</div>
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Moda</a>
						</div>
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Belleza</a>
						</div>
						<div class="item nav-config__hide__item text-center">
							<a href="#" class="nav-config__hide__category">Deco y hogar</a>
						</div>
					</div>
				</div>
				<div class="col-12 nav-config__hide">
					<ul class="navbar-nav" style="float: right;">
						<li class="nav-item">
							<div id="social">
								<a class="nav-icon2 smGlobalBtn" href="https://facebook.com/{{ $facebook->url}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a class="nav-icon2 smGlobalBtn" href="https://twitter.com/{{ $twitter->url}}" target="_blank"><i class="fab fa-twitter"></i></a>
								<a class="nav-icon2 smGlobalBtn" href="https://googleplus.com/{{ $googleplus->url}}" target="_blank"><i class="fab fa-google"></i></a>
								<a class="nav-icon2 smGlobalBtn" href="https://instagram.com/{{ $instagram->url}}" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
						</li>
						<li class="nav-item">
							<form class="search-navbar">
								<div class="input-group form-inline" id="remote">
									<div class="form-group dropdown-father">
										<select class="form-control dropdown-father__select" id="selectCategory">
											<option>Seleccione una categoria</option>
											@foreach($categories as $c)
											<option value="{{ $c->id }}">{{ $c->name }}</option>
											@endforeach
										</select>
									</div>			
									<input type="text" class="format-input form-control no-border typeahead" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn-search btn bg-transparent nav-link" type="button"> <i class="fas fa-search fa-2x"></i></button>
									</div>
								</div>
							</form>
						</li>
						<li class="nav-item">
							<div class="input-group">
								<div class="input-group-prepend dropdown dropdown-father">
									@if(Auth::id())
									<a href="" class=" dropdown-father__button-profile" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{!!Auth::user()->name!!}</a>
									@else
									<a href="{!!url('login')!!}" class=" dropdown-father__button-profile">Ingresar</a>
									@endif
									<div class="dropdown-menu dropdown-father__body" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item dropdown-father__button" href="{{ route('dashboard-admin') }}"><i class="fas fa-cogs mr-2"></i>Panel</a>
										<a class="dropdown-item dropdown-father__button" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
									</div>
								</div>
							</div>
<!-- 							@if(Auth::id())
							<a href="{!!url('logout')!!}" class="btn-edit-login btn-block">Salir </a>
							@else
							<a href="{!!url('login')!!}" class="btn-edit-login btn-block">Ingresar </a>
							@endif -->
						</li>
					</ul>
				</div>
				<div class="col-12">
					<div class="navbar-box-father">
						<div class="row">
							<div class="text-center navbar-box-father__col col-6">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-utensils"></i>
									</div>
									<div class="col-12">Gastronomia</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-6">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-film"></i>
									</div>
									<div class="col-12">Entretenimiento</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-4">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-plane"></i>
									</div>
									<div class="col-12">Turismo</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-4">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-cut"></i>
									</div>
									<div class="col-12">Moda</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-4">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-female"></i>
									</div>
									<div class="col-12">Belleza</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-6">
								<button class="btn row">
									<div class="col-12">
										<i class="fa-2x fas fa-home"></i>
									</div>
									<div class="col-12">Deco y hogar</div>
								</button>
							</div>
							<div class="text-center navbar-box-father__col col-6">
								<button class="btn row" id="search-navbar">
									<div class="col-12">
										<i class="fa-2x fas fa-search"></i>
									</div>
									<div class="col-12">Buscar</div>
								</button>
							</div>
							<div class="navbar-box-father__col col-12">					
								<input type="search" class="form-control navbar-indown-father__input-search" id="input-search">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<div class="navbar-indown-father">
	<nav class="navbar navbar-expand-lg navbar-indown-father__navbar-indown animated bounceInDown" id="navbar">
		<div class="row">
			<div class="col-2">
				<a href="{{ url('/') }}"><img src="img/logo/logo_1.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""><i class="fas fa-bars fa-2x p-1"></i></span>
				</button>
			</div>

			<div class="col-9">
				<nav class="header-nav header" id="header-3">
					<div class="search-button">
						<a href="#" class="search-toggle" data-selector="#header-3"></a>
					</div>
					<ul class="menu">
						<li>
							<div class="owl-carousel owl-theme">
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Gastronomia</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Entretenimiento</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Turismo</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Moda</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Belleza</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Deco y hogar</a>
								</div>
							</div>
						</li>
					</ul>
					<form action="" class="search-box">
						<div class="input-group form-inline dropdown-father" id="remote">
						<div class="form-group ">
							<select class="form-control dropdown-father__select" id="exampleFormControlSelect1">
								<option>Gastronomia</option>
								<option>Turismo</option>
								<option>Moda</option>
								<option>Entretenimiento</option>
								<option>5</option>
							</select>
						</div>			
					</div>
						<input type="text" class="search-input" placeholder="" />
					</form>
				</nav>
			</div>

<!-- 				<div class="owl-carousel owl-theme">
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Gastronomia</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Entretenimiento</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Turismo</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Moda</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Belleza</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Deco y hogar</a>
					</div>
				</div> -->
<!-- 			<div class="col-1">
				<div class="search-box">
					<div class="searchform">
						<input id="s" type="text" value="Buscar"/>    
						<div class="close">
							<span class="front"></span>
							<span class="back"></span>
						</div>   
					</div>
				</div>
			</div> -->
		</div>
	</nav>
</div>


<!-- miguel -->

<!-- 
<nav class="navbar navbar-expand-lg navbar-light nav-config">
	<div class="container-fluid u-leftspacing-zero">
		<div class="col nopadding">
			<div class="nav__logo-container">
				<a href="{{ url('/') }}"><div class=""><img src="{{ asset('img/logo/logo_1.png') }}" alt=""></div></a>
			</div> 
		</div>
		<button class="navbar-toggler nav-link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class=""><i class="fas fa-bars fa-2x p-1"></i></span>
		</button>
		<div class="collapse navbar-collapse ml-auto mb-4 mb-lg-0" id="navbarSupportedContent"">
			<div class="col-11 nav-config__hide">
				<ul class="navbar-nav navbar-nav ml-auto">
					<li class="nav-item">
						<div id="social">
							<a class="nav-icon2 smGlobalBtn" href="https://facebook.com/{{ $facebook->url}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a class="nav-icon2 smGlobalBtn" href="https://twitter.com/{{ $twitter->url}}" target="_blank"><i class="fab fa-twitter"></i></a>
							<a class="nav-icon2 smGlobalBtn" href="https://googleplus.com/{{ $googleplus->url}}" target="_blank"><i class="fab fa-google"></i></a>
							<a class="nav-icon2 smGlobalBtn" href="https://instagram.com/{{ $instagram->url}}" target="_blank"><i class="fab fa-instagram"></i></a>
						</div>
					</li>
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
						@if(Auth::id())
						<a href="{!!url('logout')!!}" class="btn-edit-login btn-block">Salir </a>
						@else
						<a href="{!!url('login')!!}" class="btn-edit-login btn-block">Ingresar </a>
						@endif
					</li>
				</ul>
			</div>
			<div class="col-12 nav-config__hide">
				<div id="owl-carousel3" class="owl-carousel">
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Gastronomia</a>
					</div>
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Entretenimiento</a>
					</div>
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Turismo</a>
					</div>
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Moda</a>
					</div>
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Belleza</a>
					</div>
					<div class="item nav-config__hide__item text-center">
						<a href="#" class="nav-config__hide__category">Deco y hogar</a>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="navbar-box-father">
					<div class="row">
						<div class="text-center navbar-box-father__col col-6">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-utensils"></i>
								</div>
								<div class="col-12">Gastronomia</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-6">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-film"></i>
								</div>
								<div class="col-12">Entretenimiento</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-4">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-plane"></i>
								</div>
								<div class="col-12">Turismo</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-4">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-cut"></i>
								</div>
								<div class="col-12">Moda</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-4">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-female"></i>
								</div>
								<div class="col-12">Belleza</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-6">
							<button class="btn row">
								<div class="col-12">
									<i class="fa-2x fas fa-home"></i>
								</div>
								<div class="col-12">Deco y hogar</div>
							</button>
						</div>
						<div class="text-center navbar-box-father__col col-6">
							<button class="btn row" id="search-navbar">
								<div class="col-12">
									<i class="fa-2x fas fa-search"></i>
								</div>
								<div class="col-12">Buscar</div>
							</button>
						</div>
						<div class="navbar-box-father__col col-12">					
							<input type="search" class="form-control navbar-indown-father__input-search" id="input-search">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<div class="navbar-indown-father">
	<nav class="navbar navbar-expand-lg navbar-indown-father__navbar-indown animated bounceInDown" id="navbar">
		<div class="row">
			<div class="col-2">
				<a href="{{ url('/') }}"><img src="img/logo/logo_1.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""><i class="fas fa-bars fa-2x p-1"></i></span>
				</button>
			</div>

			<div class="col-9">
				<nav class="header-nav header" id="header-3">
					<div class="search-button">
						<a href="#" class="search-toggle" data-selector="#header-3"></a>
					</div>
					<ul class="menu">
						<li>
							<div class="owl-carousel owl-theme">
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Gastronomia</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Entretenimiento</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Turismo</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Moda</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Belleza</a>
								</div>
								<div class="item nav-config__hide__item text-center">
									<a href="#" class="nav-config__hide__category">Deco y hogar</a>
								</div>
							</div>
						</li>
					</ul>
					<form action="" class="search-box">
						<input type="text" class="search-input" placeholder="" />
					</form>
				</nav>
			</div>

<!-- 				<div class="owl-carousel owl-theme">
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Gastronomia</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Entretenimiento</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Turismo</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Moda</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Belleza</a>
					</div>
					<div class="item text-center">
						<a href="#" class="nav-config__hide__category">Deco y hogar</a>
					</div>
				</div> -->
<!-- 			<div class="col-1">
				<div class="search-box">
					<div class="searchform">
						<input id="s" type="text" value="Buscar"/>    
						<div class="close">
							<span class="front"></span>
							<span class="back"></span>
						</div>   
					</div>
				</div>
			</div> -->
		</div>
	</nav>
</div>
