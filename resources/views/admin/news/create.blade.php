@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 section_profile">
				<div class="container ">
					<h4>Crear Noticia</h4>
					<form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
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
								<label for="Titulo">Titulo</label>
								<input type="text" name="title" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Texto">Texto</label>
								<input type="text" name="text" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Fecha">Fecha</label>
								<input type="date" name="date" class="form-control form-control-lg section_profile__input">
							</div>
							<div class="form-group col-md-6">
								<label for="Imagen">Imagen</label>
								<input type="file" name="image" class="form-control form-control-lg section_profile__input">
							</div>
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn button-style section_profile__button">Crear</button>
							<a href="{{ url('/news') }}" class="btn button-default">Regresar</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection