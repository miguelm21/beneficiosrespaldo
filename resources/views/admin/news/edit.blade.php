@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		<div class="col-lg-3 col-md-4 nopadding">
			<div class="card m-3">
				<div class="dashboard">
					<div class="col-12 text-center">
						<a href="">
							<img src="{{ asset('images/hero.png') }}" class="dashboard__image-profile" alt="Imagen Perfil Admin" class="img-profile m-2">
						</a>
						<hr>
					</div>
					<div class="col-12">
						<div class="text-center my-4">
							<label class="dashboard__label my-3"><b>Administrador home:</b></label>
							<ul class="list-group dashboard__list">
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 1</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 2</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 3</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 4</li></a>
								<a href="" class=""><li class="dashboard__list__button list-group-item">Administrador 5</li></a>
							</ul>
						</div>
					</div>
					<hr>
					<div class="col-12">
						<div class="row">
							<div class="col-12 my-1">
								<button type="button" class="btn dashboard__button btn-block btn-lg">Cambiar contraseña</button>
							</div>
							<div class="col-12 my-1">
								<button type="button" class="btn dashboard__button btn-danger btn-block btn-lg">Salir</button>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 section_profile">
				<div class="container ">
					<h4>Editar Noticia</h4>
					{!!Form::model($new, ['route'=>['news.update', $new],'method'=>'PUT', 'files' => true])!!}
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Titulo">Titulo</label>
								<input type="text" name="title" class="form-control form-control-lg section_profile__input" value="{{ $new->title }}">
							</div>
							<div class="form-group col-md-6">
								<label for="Texto">Texto</label>
								<input type="text" name="text" class="form-control form-control-lg section_profile__input" value="{{ $new->text}}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Fecha">Fecha</label>
								<input type="date" name="date" class="form-control form-control-lg section_profile__input" value="{{ $new->date }}">
							</div>
							<div class="form-group col-md-6">
								<label for="Imagen">Imagen</label>
								<input type="file" name="image" class="form-control form-control-lg section_profile__input" value="{{ $new->image }}">
							</div>
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn button-style section_profile__button">Editar</button>
							<a href="{{ url('/news') }}" class="btn button-default">Regresar</a>
						</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection