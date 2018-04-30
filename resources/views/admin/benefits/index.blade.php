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
								<h4>Beneficios</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
									<a href="{{ route('benefits.create') }}" class="btn add-category" data-toggle="tooltip" title data-original-title="Crear">Agregar beneficio</a>
								</div>
							</div>
<!-- 							<div class="col-md-12">
								<div class="col-1 noleftpadding">
									<a href="{{ route('benefits.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div> -->
							<div class="row">
								<div class="col-12">
									<table class="table  table-hover table-responsive-lg table-bordered custom-table">
										<thead class="cms-admin-father__thead-color">
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
		<td class="text-center"><img width="100px" height="80px" class="" src="data:image/png;base64, {{ $b->image }}" alt="image-{{ $b->id }}"></td>
		<td align="center">
			<div class="btn-group ">
				<a href="{{ route('benefits.edit', $b->id) }}" class="btn btn-info ml-2" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
				{!!Form::open(['route'=>['benefits.destroy', $b], 'method'=>'DELETE', 'onsubmit' => 'return confirmDelete()'])!!}
				<button class="btn btn-danger ml-2" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
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
</div>
<script type="text/javascript">
	function confirmDelete() {
		var result = confirm('¿Esta seguro de borrar este Beneficio?');

		if (result) {
			return true;
		} else {
			return false;
		}
	}
</script>
@endsection
