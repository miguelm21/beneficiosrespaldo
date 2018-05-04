@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3">
				<div class="container cms-admin-father cms-create-father">
					{!!Form::model($slider, ['route'=>['cmsslider.update', $slider],'method'=>'PUT', 'files' => true])!!}
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
								<h4>Editar imagen</h4>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-12 mb-3">
							<label for="Imagen file-edit">Editar imagen</label>
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input file-edit" id="inputGroupFile01">
								<label class="custom-file-label file-edit" for="inputGroupFile01">Agregar</label>
							</div>
						</div>
<!-- 							<div class="form-group col-md-6">
								<label for="Imagen">Imagen</label>
								<input type="file" name="image" class="form-control form-control-lg section_profile__input">
							</div> -->
						</div>
						<div class="col-12 text-right nopadding">
							<button type="submit" class="btn submit-button">Editar</button>
							<a href="{{ url('/cmsslider') }}" class="btn back-button">Regresar</a>
						</div>
						{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection