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
					<h4>Perfil de usuario</h4>
					{!!Form::model($user, ['route'=>['benefits.update', $user],'method'=>'PUT', 'files' => true])!!}
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">Nombre</label>
								<input type="name" class="form-control form-control-lg section_profile__input" id="" value="{{ $user->name }}">
							</div>
							<div class="form-group col-md-6">
								<label for="Apellido">Apellido</label>
								<input type="password" class="form-control form-control-lg section_profile__input" id="Apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="DNI">DNI</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="DNI">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">Telefono</label>
								<input type="name" class="form-control form-control-lg section_profile__input" id="">
							</div>
							<div class="form-group col-md-6">
								<label for="Apellido">Email</label>
								<input type="password" class="form-control form-control-lg section_profile__input" id="Apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">Provincia</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Ciudad</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">Domicilio</label>
								<input type="text" class="form-control form-control-lg section_profile__input" id="inputCity">
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
