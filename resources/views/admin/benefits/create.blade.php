@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 section_profile">
				<div class="container ">
					<h4>Crear Beneficio</h4>
					<form action="{{ route('benefits.store') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
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
								<label for="Nombre">Nombre</label>
								<input type="text" name="name" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Descripcion">Descripcion</label>
								<input type="text" name="description" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="FechaInicio">Fecha de Inicio</label>
								<input type="date" name="datestart" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="FechaCulminacion">Fecha de Culminacion</label>
								<input type="date" name="dateend" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Latitude">Latitud</label>
								<input type="text" name="latitude" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Longitud">Longitud</label>
								<input type="text" name="longitude" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Categoria">Categoria</label>
								<select name="category_id" class="form-control form-control-lg section_profile__input">
									<option value="">Seleccione una Categoria</option>
									@foreach ($categories as $c)
										<option value="{{ $c->id}}">{{ $c->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="Imagen">Imagen</label>
								<input type="file" name="image" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Porcentaje">Porcentaje</label>
								<input type="text" name="percent" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Longitud">Palabras Claves</label>
								<input name="tags" id="tags" placeholder="Agregue una palabra clave" class="form-control form-control-lg section_profile__input" />
							</div>
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn button-style section_profile__button">Crear</button>
							<a href="{{ url('/benefits') }}" class="btn button-default">Regresar</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection