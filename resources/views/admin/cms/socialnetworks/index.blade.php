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
							<!-- <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;">
								<div class="col-1 noleftpadding">
									<a href="{{ route('cmssocialnetworks.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div> -->
							<div class="col-12">
								<table class="table">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col-3">Name</th>
								      <th scope="col-7">Url</th>
								      <th scope="col-2">Opciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($social as $s)
								  	<tr>
								  		<td>{{ $s->name }}</td>
								  		<td>{{ $s->url }}</td>
								  		<td align="right">
											<div class="btn-group">
												<a href="{{ route('cmssocialnetworks.edit', $s->id) }}" class="btn btn-info" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
												<!-- <form action="{{ route('cmssocialnetworks.destroy', $s) }}" method="delete" onsubmit="return ConfirmDelete()">
													<button class="btn btn-danger" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
				    								<i class="fas fa-trash fa-2x"></i> </button>
												</form> -->
											</div>
										</td>
								  	</tr>
								    @endforeach
								  </tbody>
								</table>
								{!!$social->render()!!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection