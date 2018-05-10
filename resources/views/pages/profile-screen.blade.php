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
					{!!Form::model($user, ['route'=>['updateprofile', $user],'method'=>'PUT', 'files' => true])!!}
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
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
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Name">Nombre</label>
								<input type="text" name="name" class="form-control form-control-lg section_profile__input" id="name" value="{{ $user->name }}">
							</div>
							<div class="form-group col-md-6">
								<label for="DNI">DNI</label>
								<input type="text" name="dni" class="form-control form-control-lg section_profile__input" id="dni" value="{{ $user->dni }}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Email">Email</label>
								<input type="text" name="email" class="form-control form-control-lg section_profile__input" id="email" value="{{ $user->email }}" disabled>
							</div>
							<div class="form-group col-md-6">
								<label for="Phone">Telefono</label>
								<input type="text" name="phone" class="form-control form-control-lg section_profile__input" id="phone" value="{{ $user->phone }}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Provincia">Provincia</label>
								<input type="text" name="province" class="form-control form-control-lg section_profile__input" id="province" value="{{ $user->province }}">
							</div>
							<div class="form-group col-md-6">
								<label for="Ciudad">Ciudad</label>
								<input type="text" name="city" class="form-control form-control-lg section_profile__input" id="city" value="{{ $user->city }}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Domicilio">Domicilio</label>
								<input type="text" name="domicile" class="form-control form-control-lg section_profile__input" id="domicile" value="{{ $user->domicile }}">
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
