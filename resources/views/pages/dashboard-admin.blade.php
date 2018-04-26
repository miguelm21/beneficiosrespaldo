@extends('template')

@section('content')
<div class="container-fluid container-edit">
<!-- 	<div class="row">
		<div class="col-12">
			<div class="logo text-right">
				<a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a>
			</div>
		</div>
	</div> -->
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
					<div class="row ">
						<div class="col-12 content-admin">
							<div class="row">
								<div class="col-sm-6 col-lg-4 col-12">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Beneficios Activos</h3>
								</div>
								<div class="col-sm-6 col-lg-4 col-12">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Cupones utilizados</h3>
								</div>
								<div class="col-sm-6 col-sm-6 m-sm-auto col-lg-4 col-12 text-center">
									<img src="img/stadistic.png" class="content-admin__img" alt="">
									<h3 class="text-center content-admin__title">Usuarios registrados</h3>
								</div>
							</div>
							<div class="row text-center box-admin">
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 1</a>
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 2</a>
									<a href="" class="circle-first content-admin__button btn-block">Beneficio 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-6 p-2">
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 1</a>
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 2</a>
									<a href="" class="circle-second content-admin__button btn-block">Cupones utilizados 3</a>
								</div>
								<div class="col-lg-4 col-4 col-sm-4 col-12 p-2">
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 1</a>
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 2</a>
									<a href="" class="circle-third content-admin__button btn-block">Usuarios registrados 3</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection