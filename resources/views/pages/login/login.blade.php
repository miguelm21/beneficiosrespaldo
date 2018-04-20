@extends('template')

@section('content')

<section>
	<div class="container container-edit">
		<div class="row">
			<div class="col-12 col-lg-6 m-lg-auto col-sm-8 m-sm-auto">
				<div class="content content_login">
					<div class="title">Iniciar sesión</div>
					@if(Session::Has('message'))
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{Session::get('message')}}
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
