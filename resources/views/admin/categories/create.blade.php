@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12 ">
			<div class="p-3 cms-admin-father cms-create-father">
				<div class="container">
					<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
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
									<h4>Crear categoría</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label for="Nombre">Nombre</label>
								<input type="text" name="name" class="form-control form-control-lg section_profile__input">
							</div>

							<div class="form-group col-md-12">
								<label for="Font">Icon Web</label>
								<input type="text" name="iconweb" class="form-control form-control-lg section_profile__input">
								<a href="https://fontawesome.com/icons?d=gallery" target="_blank">Font Awesome Icons</a>
							</div>
							<div class="form-group col-md-12">
								<label for="Font">Icon App</label>
								<input type="text" name="iconapp" class="form-control form-control-lg section_profile__input">
								<a href="https://ionicframework.com/docs/ionicons/" target="_blank">Ionic Icons</a>
							</div>
							<div class="form-group col-md-12">
								<label for="Font">Icon Map</label>
								<input type="text" name="iconmap" class="form-control form-control-lg section_profile__input">
								<a href="https://icon-icons.com" target="_blank">Icon Icons</a>
							</div>
						</div>
						<div class="col-12 text-right">
							<button type="submit" class="btn submit-button">Crear</button>
							<a href="{{ url('/categories') }}" class="btn back-button">Regresar</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection