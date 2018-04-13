@extends('template')

@section('content')

<section>
	<div class="container container-edit">
		<div class="row">
			<div class="col-12 col-lg-6 m-lg-auto col-sm-8 m-sm-auto">
				<div class="content content_login">
					<div class="title">Iniciar sesión</div>
					<input type="text" placeholder="E-mail"/>
					<input type="password" placeholder="Password"/>
					<input type="checkbox" id="rememberMe"/>
					<label for="rememberMe"></label><span>Recordar mi contraseña</span>
					<button>Iniciar sesión</button>
					<div class="social">¿No tienes cuenta aún? ¡Registrate aquí!</div>
					<div class="row">
						<div class="col-12 text-center">
							<a href="{!!url('sign-up')!!}" class="btn content_login__button"><i class="fa fa-user-plus mx-2"></i>Crear nueva cuenta</a>
						</div>
					</div>
<!-- 					<div class="buttons">
						<button class="facebook btn btn-block"><i class="fab fa-facebook-f mx-2"></i>Facebook</button>
						<button class="google btn btn-block"><i class="fab fa-google mx-2"></i>Google</button>
					</div> -->
				</div>
			</div>
		</div>
	</div>

</section>
@endsection
