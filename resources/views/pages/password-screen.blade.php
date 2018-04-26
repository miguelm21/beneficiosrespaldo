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
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 section_profile">
				<div class="container ">
					<h4>Cambiar contraseña</h4>
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
					{!!Form::model($user, ['route'=>['password', $user],'method'=>'PUT', 'files' => true])!!}
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Contraseña Actual">Contraseña Actual</label>
								<input type="password" autocomplete="off" name="old_password" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Nueva Contraseña">Nueva Contraseña</label>
								<input type="password" autocomplete="off" name="password" class="form-control form-control-lg section_profile__input" id="Apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="C Nueva Contraseña">Confirmar Nueva Contraseña</label>
								<input type="password" autocomplete="off" name="password_confirmation" class="form-control form-control-lg section_profile__input" id="DNI">
							</div>
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn button-style section_profile__button">Actualizar</button>
						</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
