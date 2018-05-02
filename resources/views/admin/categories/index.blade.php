@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12"">
			<div class="p-3">
				<div class="container cms-admin-father">
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
								<h4>Categorias</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<a href="{{ route('categories.create') }}" class="btn add-category" data-toggle="tooltip" title data-original-title="Crear">Agregar categoria</a>
								</div>
								<div class="col-12">
									<table class="table  table-hover table-responsive-lg table-bordered custom-table">
										<thead class="cms-admin-father__thead-color">
											<tr>
												<th scope="col-3">Name</th>
												<th scope="col-3">Icono Web</th>
												<th scope="col-3">Icono App</th>
												<th scope="col-2" class="text-center">Opciones</th>
											</tr>
										</thead>
										<tbody>
											@foreach($cats as $c)
											<tr>
												<td>{{ $c->name }}</td>
												<td>{{ $c->iconweb }}</td>
												<td>{{ $c->iconapp }}</td>
												<td align="center">
													<div class="btn-group">
														<a href="{{ route('categories.edit', $c->id) }}" class="btn btn-info ml-2" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
														{!!Form::open(['route'=>['categories.destroy', $c], 'method'=>'DELETE', 'onsubmit' => 'return confirmDelete()'])!!}
														<button class="btn btn-danger ml-2" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
															<i class="fas fa-trash fa-2x"></i> </button>
															{!!Form::close()!!}
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
										{!!$cats->render()!!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function confirmDelete() {
			var result = confirm('¿Esta seguro de borrar esta Categoria?');

			if (result) {
				return true;
			} else {
				return false;
			}
		}
	</script>
	@endsection
