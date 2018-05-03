@extends('template')

@section('content')

<section>
	<div class="container container-edit">
		<div class="row">
			<div class="col-12 col-lg-6 m-lg-auto col-sm-8 m-sm-auto">
				<div class="content content_sign-up">
					<div class="title">Registrarse</div>
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
					<form action="{{ url('/register') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" name="name" placeholder="Nombre"/>
						<input type="text" name="lastname" placeholder="Apellido"/>
						<input type="text" name="dni" placeholder="DNI"/>
						<input type="text" name="email" placeholder="E-mail"/>
						<input type="text" name="phone" placeholder="Telefono"/>
						<input type="text" name="province" placeholder="Provincia"/>
						<input type="text" name="city" placeholder="Ciudad"/>
						<input type="text" name="home" placeholder="Domicilio"/>
						<input type="password" name="password" placeholder="Contraseña"/>
						<input type="password" name="password_confirmation" placeholder="Confirmar contraseña"/>
						<input type="checkbox" name="agree" id="rememberMe"/>
						<label for="rememberMe"></label><span>He leido y estoy de acuerdo con los terminos y servicios.</span>
						<button type="submit" class="content_sign-up__button-register">Regístrate</button>
					</form>
					<div class="social">O inicia sesión con tus redes sociales</div>
					<div class="buttons">
						<button class="facebook btn btn-block "><i class="fab fa-facebook-f mx-2"></i>Facebook</button>
						<button class="google btn btn-block "><i class="fab fa-google mx-2"></i>Google</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
