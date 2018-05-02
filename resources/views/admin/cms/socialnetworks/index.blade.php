@extends('template')

@section('content')
<div class="container-fluid container-edit">
	<div class="row my-1">
		@include('partials.sidebar')
		<div class="col-lg-9 col-md-8 col-12"">
			<div class="p-3">
				<div class="container  cms-admin-father">
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
								<h4>Redes sociales</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;">
								<div class="col-1 noleftpadding">
									<a href="{{ route('cmssocialnetworks.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div> -->
							<div class="col-12">
								<table class="table table-hover table-responsive-lg table-bordered custom-table">
									<thead class="cms-admin-father__thead-color">
										<tr>
											<th scope="col-3" style="width:30%;">Name</th>
											<th scope="col-7" style="width:50%;">Url</th>
											<th scope="col-2" class="text-center" style="width:40%;">Opciones</th>
										</tr>
									</thead>
									<tbody>
										@foreach($social as $s)
										<tr>
											<td>{{ $s->name }}</td>
											<td>{{ $s->url }}</td>
											<td align="center">
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