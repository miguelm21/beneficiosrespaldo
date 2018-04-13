@extends('template')

@section('content')

<section>
	<div class="container container-edit">
		<div class="row">
			<div class="col-12 col-lg-6 m-lg-auto col-sm-8 m-sm-auto">
				<div class="content content_sign-up">
					<div class="title">Registrarse</div>
					<input type="text" name="name" placeholder="Nombre"/>
					<input type="text" name="email" placeholder="E-mail"/>
					<input type="password" name="password" placeholder="Contraseña"/>
					<input type="password" name="password" placeholder="Confirmar contraseña"/>
					<input type="checkbox" id="rememberMe"/>
					<label for="rememberMe"></label><span>He leido y estoy de acuerdo con los terminos y servicios.</span>
					<button class="content_sign-up__button-register">Regístrate</button>
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
