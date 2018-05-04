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
								<h4>CMS Slider</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<a href="{{ route('cmsslider.create') }}" class="btn add-category" data-toggle="tooltip" title data-original-title="Crear">Agregar imagen</a>
								</div>
								<div class="col-12">
									<table class="table  table-hover table-bordered">
										<thead class="cms-admin-father__thead-color">
											<tr>
												<th scope="col-3" style="width: 70%;">Imagen</th>
												<th scope="col-2" class="text-center" style="width: 30%;">Opciones</th>
											</tr>
										</thead>
										<tbody>
											@foreach($slider as $s)
											<tr>
												<td><img width="100px" height="80px" src="data:image/png;base64, {{ $s->image }}" alt="image-{{ $s->id }}"></td>
												<td align="center">
													<div class="btn-group">
														<a href="{{ route('cmsslider.edit', $s->id) }}" class="btn btn-info mr-2" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
														<form action="{{ route('cmsslider.destroy', $s) }}" method="delete" onsubmit="return ConfirmDelete()">
															<button class="btn btn-danger mr-2" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
																<i class="fas fa-trash fa-2x"></i> </button>
															</form>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
										{!!$slider->render()!!}
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
				var result = confirm('¿Esta seguro de borrar esta imagen?');

				if (result) {
					return true;
				} else {
					return false;
				}
			}
		</script>
		@endsection
