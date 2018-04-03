@extends('template')

<head><script type="text/javascript">var centreGot = false;</script>
<?php echo $map['js']; ?></head>

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="logo text-right">
				<a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-12 nopadding">
			<div class="row m-0">
				<div class="border-closest p-1">
					<div class="row my-4">
						<div class="col-12 form-inline">
							<div class="form-group center-km">
								<div class="col-lg-8 col-12 text-center">
									<input class="form-control form-control-lg w-100" type="number" min="1" max="9" step="1" value="1">
								</div>
								<div class="col-lg-4 col-12 text-center">
									<label for="form-control">Km</label>
								</div>
								<div class="col-12 nopadding my-1">
									<button class="btn btn-block button-style">Aplicar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="box-panel-closest">
						<div class="row p-3">
							<div class="col-lg-12 col-sm-6 col-12 my-2">
								<div class="card">
									<img class="card-img-top img-height"  src="img/place/place-1.png" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn button-style pull-right">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-6 col-12 my-2">
								<div class="card">
									<img class="card-img-top img-height"  src="img/place/place-2.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn button-style pull-right">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-6 col-12 my-2">
								<div class="card">
									<img class="card-img-top img-height"  src="img/place/place-3.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn button-style pull-right">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-6 col-12 my-2">
								<div class="card">
									<img class="card-img-top img-height"  src="img/place/place-2.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="btn button-style pull-right">Go somewhere</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-12 border-closest2 nopadding">
			<div class="box-img-gps p-4">
				<!-- <img src="images/gps-2.jpg" class="gps-img" alt=""> -->
				<body><?php echo $map['html']; ?></body>
			</div>
		</div>
	</div>
</div>
@endsection