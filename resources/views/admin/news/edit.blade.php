@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 cms-create-father">
				<div class="container ">
					{!!Form::model($new, ['route'=>['news.update', $new],'method'=>'PUT', 'files' => true])!!}
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
					<div class="row">
						<div class="col-12">
							<div class="cms-admin-father__container-title">
								<h4>Editar noticia</h4>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="Titulo">Titulo</label>
							<input type="text" name="title" class="form-control form-control-lg section_profile__input" value="{{ $new->title }}">
						</div>
						<div class="form-group col-md-6">
							<label for="Fecha">Fecha</label>
							<input type="date" name="date" class="form-control form-control-lg section_profile__input" value="{{ $new->date }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-12 mb-3">
							<label for="Imagen file-edit">Agregar imagen</label>
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input file-edit" id="inputGroupFile01">
								<label class="custom-file-label file-edit" for="inputGroupFile01">Agregar</label>
							</div>
						</div>
<!-- 						<div class="form-group col-md-6">
							<label for="Imagen">Imagen</label>
							<input type="file" name="image" class="form-control form-control-lg section_profile__input" value="{{ $new->image }}">
						</div> -->
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="Texto">Texto</label>
							<!-- 								<textarea name="text" cols="30" rows="10" class="form-control textarea"></textarea> -->
							{!!Form::textarea('text',null,['class'=>'form-control', 'id' => 'textarea', 'style' => 'resize:none', 'rows' => '4'])!!}
						</div>
					</div>
					<div class="col-12 text-right nopadding">
						<button type="submit" class="btn submit-button">Editar</button>
						<a href="{{ url('/news') }}" class="btn back-button">Regresar</a>
					</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection