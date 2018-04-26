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
									<a href="{{ route('news.create') }}" class="btn btn-success" data-toggle="tooltip" title data-original-title="Crear" type="button" style="width:100%;"><i class="fas fa-plus-circle fa-2x"></i></a>
								</div>
							</div>
							<div class="col-12">
								<table class="table">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col-3">Title</th>
								      <th scope="col-7">Text</th>
								      <th scope="col-2">Opciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($news as $n)
								  	<tr>
								  		<td>{{ $n->title }}</td>
								  		<td>{!! $n->text !!}</td>
								  		<td align="right">
											<div class="btn-group">
												<a href="{{ route('news.edit', $n->id) }}" class="btn btn-info" data-toggle="tooltip" title data-original-title="Editar" type="edit"><i class="fa fa-edit fa-2x"></i></a>
												{!!Form::open(['route'=>['news.destroy', $n], 'method'=>'DELETE', 'onsubmit' => 'return confirmDelete()'])!!}
													<button class="btn btn-danger" data-toggle="tooltip" title data-original-title="Eliminar" type="submit">
				    								<i class="fas fa-trash fa-2x"></i> </button>
												{!!Form::close()!!}
											</div>
										</td>
								  	</tr>
								    @endforeach
								  </tbody>
								</table>
								{!!$news->render()!!}
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
	var result = confirm('¿Esta seguro de borrar esta noticia?');

	if (result) {
	    return true;
	} else {
	    return false;
	}
}
</script>
@endsection
