@extends('template')

@section('content')

<section>
	<div class="container container-edit">
		@if(Session::Has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('message')}}
		</div>
		@endif
		@if(Session::Has('err'))
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('err')}}
		</div>
		@endif
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			Errores<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="row">
			<div class="col-12 col-lg-6 m-lg-auto col-sm-8 m-sm-auto">
				<div class="content content_login">
					<div class="title">Iniciar sesión</div>
					<form action="{{ route('auth') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" name="email" placeholder="E-mail"/>
						<input type="password" name="password" placeholder="Password"/>
						<input type="checkbox" name="remember" id="rememberMe"/>
						<label for="rememberMe"></label><span>Recordar mi contraseña</span>
						<button type="submit">Iniciar sesión</button>
					</form>
					<div class="social">¿No tienes cuenta aún? ¡Registrate aquí!</div>
					<div class="row">
						<div class="col-12 text-center">
							<a href="{!!url('sign-up')!!}" class="btn content_login__button"><i class="fa fa-user-plus mx-2"></i>Crear nueva cuenta</a>
						</div>
					</div>
					<div class="buttons">
						<div class="social mb-3">O ingresa desde tu red social</div>
						<div class="row">
							<div class="col-lg-6 col-12 my-1">
								<a href="{{ url('/auth/facebook') }}" class="loginBtn loginBtn--facebook btn-block btn">
									<i class="fab fa-facebook-f mr-2"></i>Conectar con&nbsp;&nbsp;<b>FACEBOOK</b>
								</a>
							</div>
							<div class="col-lg-6 col-12 my-1">
								<a href="{{ url('/auth/google') }}" class="loginBtn loginBtn--google btn-block btn">
									<i class="fab fa-google-plus-g mr-2"></i>Conectar con&nbsp;&nbsp;<b>GOOGLE+</b>
								</a>
							</div>
						</div>
					</div>
<!-- 					<div class="buttons">
						<a href="{{ url('/auth/facebook') }}" class="facebook btn btn-block"><i class="fab fa-facebook-f mx-2"></i>Facebook</a>
						<a href="{{ url('/auth/google') }}" class="google btn btn-block"><i class="fab fa-google mx-2"></i>Google</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>

</section>
@endsection
