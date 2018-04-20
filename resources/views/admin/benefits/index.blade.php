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
		<div class="col-lg-9 col-md-8 col-12"">
			<div class="p-3">
				<div class="container">
					<div class="row">
						<div class="col-12 content-admin">
							<div class="col-md-12" style="margin-top:20px;margin-bottom:10px;">
								<div class="col-1 noleftpadding">
									<a href="{{ route('benefits.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div>
							<div class="col-12">
								<table class="table">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col-3">Name</th>
								      <th scope="col-3">Descripcion</th>
								      <th scope="col-3">Fecha de Inicio</th>
								      <th scope="col-3">Fecha de Culminacion</th>
<!-- 								      <th scope="col-3">Latitude</th>
								      <th scope="col-3">Longitude</th> -->
								      <th scope="col-3">Imagen</th>
								      <th scope="col-2">Opciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($benefits as $b)
								  	<tr>
								  		<td>{{ $b->name }}</td>
								  		<td>{{ $b->description }}</td>
								  		<td>{{ $b->datestart }}</td>
								  		<td>{{ $b->dateend }}</td>
								  		<td><img width="150px" height="150px" src="data:image/png;base64, {{ $b->image }}" alt="image-{{ $b->id }}"></td>
								  		<td align="right">
											<div class="btn-group">
												<a href="{{ route('benefits.edit', $b->id) }}" class="btn btn-info" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
												{!!Form::open(['route'=>['benefits.destroy', $b], 'method'=>'DELETE', 'onsubmit' => 'return confirmDelete()'])!!}
													<button class="btn btn-danger" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
				    								<i class="fas fa-trash fa-2x"></i> </button>
												{!!Form::close()!!}
											</div>
										</td>
								  	</tr>
								    @endforeach
								  </tbody>
								</table>
								{!!$benefits->render()!!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<script type="text/javascript">
function confirmDelete() {
	var result = confirm('¿Esta seguro de borrar esta noticia?');

	if (result) {
	    return true;
	} else {
	    return false;
	}
}
</script>