@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12"">
			<div class="p-3">
				<div class="container">
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
						<div class="col-12 content-admin">
							<div class="col-md-12" style="margin-top:20px;margin-bottom:10px;">
								<div class="col-1 noleftpadding">
									<a href="{{ route('cmsslider.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div>
							<div class="col-12">
								<table class="table">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col-3">Imagen</th>
								      <th scope="col-2">Opciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($slider as $s)
								  	<tr>
								  		<td><img width="150px" height="150px" src="data:image/png;base64, {{ $s->image }}" alt="image-{{ $s->id }}"></td>
								  		<td align="right">
											<div class="btn-group">
												<a href="{{ route('cmsslider.edit', $s->id) }}" class="btn btn-info" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
												<form action="{{ route('cmsslider.destroy', $s) }}" method="delete" onsubmit="return ConfirmDelete()">
													<button class="btn btn-danger" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
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
