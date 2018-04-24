@extends('template')
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	
	@section('content')

	<div class="container-fluid container-edit closet-container">
		<div class="row">
			<div class="col-12">
				<div class="logo text-right">
				<!-- <a href="">
					<img src="img/Penguins.jpg" width="80px" height="80px" class="rounded back-img my-4" alt="">
				</a> -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-sm-3 col-12">
			<div class="row">
				<div class="card box-benefits mx-3">
					<div class="p-3">
						<div class="col-lg-10 col-sm-6 m-lg-auto col-md-12 nopadding  box-km">
							<!-- <form action="{{ route('closet-benefits') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8"> -->
								<div class="form-group form-inline">
									<!-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> -->
									<div class="col-lg-8 col-md-8 col-12">
										<input class="form-control form-control-lg w-100" type="number" min="0" step="1" value="0" name="km" id="km">
									</div>
									<div class="col-lg-4 col-md-4 col-12 text-center nopadding">
										<label for="form-control text-center">Km</label>
									</div>
									<div class="col-12 my-1">
										<button type="submit" class="btn btn-block button-style" id="apply">Aplicar</button>
									</div>
								</div>
							<!-- </form> -->
						</div>
						<hr>
						<div class="box-panel-closest">
							<div class="row" id="box-panel">
								<!-- <div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/gastro_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Gastronomía</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/entertaiment_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Entretenimiento</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/tourism_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Turismo</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div>
								<div class="col-lg-12 col-sm-4 col-12 my-2">
									<div class="card">
										<img class="card-img-top" height="160"  src="img/category/beauty_1.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="box-panel-closest__title">Belleza</h5>
											<p class="box-panel-closest__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="btn button-style pull-right">Ver más</a>
										</div>
									</div>
									<hr>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-sm-9 col-12">
			<div class="row my-5">
				<div class="col-sm-12 m-sm-auto col-lg-11 m-lg-auto">
					<div class="form-group">
						<div class="row">
							@foreach($categories as $c)
								<div class="col-lg-3 col-sm-4 col-12 my-1">
									<input type="checkbox" name="cat[]" value="{{ $c->id }}" class="checkbox-edit" id="box-{{ $c->id }}">
									<label for="box-{{ $c->id }}">{{ $c->name }}</label>
								</div>
								
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="box-img-gps">
						<!-- <img src="images/gps-2.jpg" class="gps-img" alt=""> -->
						<div class="box-img-gps__gps"><div id="map"></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
$(function(){
	

	
});
</script>
<script>
var map;
var markers = [];

function initMap() {

	var a = [];
	var cats = {!! json_encode($categories) !!}

  	if (navigator.geolocation) {
      	navigator.geolocation.getCurrentPosition(function(position) {
	        var pos = {
	          lat: position.coords.latitude,
	          lng: position.coords.longitude
	        };

	        var center = { lat: -32.889459, lng: -68.845839 };
		    map = new google.maps.Map(document.getElementById('map'), {
		      center: pos,
		      zoom: 13
		    });

		    var marker = new google.maps.Marker({
		      position: pos,
		      map: map
		    });
		    markers.push(marker);

		    var benefits = {!! json_encode($benefs) !!}

			benefits.forEach(function(data) {
				var marker = new google.maps.Marker({
		      		position: { lat: data.latitude, lng: data.longitude },
		      		map: map,
		      		icon: data.iconmap
		    	});
		    	markers.push(marker);

		    	var template = [
		    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
						'<div class="card">',
							'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
							'<div class="card-body">',
								'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
								'<p class="box-panel-closest__text">' + data.description +'</p>',
								'<a href="#" class="btn button-style pull-right">Ver más</a>',
							'</div>',
						'</div>',
						'<hr>',
					'</div>'
				].join("\n");

				$("#box-panel").append(template);
			});

			cats.forEach(function(data) {
				$('#box-' + data.id).click(function() {
					if($('#box-' + data.id).is(':checked')) { 
			            a.push(this.value);
			    		$("div.box-panel2").remove();
	     				deleteMarkers();
						var marker = new google.maps.Marker({
					      position: pos,
					      map: map
					    });
					    markers.push(marker);

					    benef = [];

					    jQuery.grep(benefits, function( b ) {
					    	if(jQuery.inArray((b.id).toString(), a) !== -1)
					    	{
					    		benef.push(b)
					    	}
						});

	     				benef.forEach(function(data) {
	     					var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
	     					if($('#km').val() < 1)
	     					{
	     						var marker = new google.maps.Marker({
						      		position: new google.maps.LatLng(data.latitude, data.longitude),
						      		map: map,
						      		icon: data.iconmap
						    	});
						    	markers.push(marker);

						    	var template = [
						    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
										'<div class="card">',
											'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
											'<div class="card-body">',
												'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
												'<p class="box-panel-closest__text">' + data.description +'</p>',
												'<a href="#" class="btn button-style pull-right">Ver más</a>',
											'</div>',
										'</div>',
										'<hr>',
									'</div>'
								].join("\n");

								$("#box-panel").append(template);
	     					}
	     					else
	     					{
	     						if(distance <= $('#km').val())
								{
									var marker = new google.maps.Marker({
							      		position: new google.maps.LatLng(data.latitude, data.longitude),
							      		map: map,
							      		icon: data.iconmap
							    	});
							    	markers.push(marker);

							    	var template = [
							    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
											'<div class="card">',
												'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
												'<div class="card-body">',
													'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
													'<p class="box-panel-closest__text">' + data.description +'</p>',
													'<a href="#" class="btn button-style pull-right">Ver más</a>',
												'</div>',
											'</div>',
											'<hr>',
										'</div>'
									].join("\n");

									$("#box-panel").append(template);
								}
	     					}	
					    });
			        } else if($('#box-' + data.id).not(':checked')) {
			        	$("div.box-panel2").remove();
			        	const index = a.indexOf(this.value);
			        	a.splice(index, 1)
			        	if(a.length < 1)
			        	{
			        		var marker = new google.maps.Marker({
						      position: pos,
						      map: map
						    });
						    markers.push(marker);
							benefits.forEach(function(data) {
								var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
								if($('#km').val() < 1)
	     						{	
									var marker = new google.maps.Marker({
							      		position: new google.maps.LatLng(data.latitude, data.longitude),
							      		map: map,
							      		icon: data.iconmap
							    	});
							    	markers.push(marker);

							    	var template = [
							    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
											'<div class="card">',
												'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
												'<div class="card-body">',
													'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
													'<p class="box-panel-closest__text">' + data.description +'</p>',
													'<a href="#" class="btn button-style pull-right">Ver más</a>',
												'</div>',
											'</div>',
											'<hr>',
										'</div>'
									].join("\n");

									$("#box-panel").append(template);
								}
								else
	     						{
		     						if(distance <= $('#km').val())
									{
										var marker = new google.maps.Marker({
								      		position: new google.maps.LatLng(data.latitude, data.longitude),
								      		map: map,
								      		icon: data.iconmap
								    	});
								    	markers.push(marker);

								    	var template = [
								    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
												'<div class="card">',
													'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
													'<div class="card-body">',
														'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
														'<p class="box-panel-closest__text">' + data.description +'</p>',
														'<a href="#" class="btn button-style pull-right">Ver más</a>',
													'</div>',
												'</div>',
												'<hr>',
											'</div>'
										].join("\n");

										$("#box-panel").append(template);
									}
		     					}
							});
			        	}
			        	else
			        	{
			        		$("div.box-panel2").remove();
		     				deleteMarkers();
							var marker = new google.maps.Marker({
						      position: pos,
						      map: map
						    });
						    markers.push(marker);

							benef = [];

						    jQuery.grep(benefits, function( b ) {
						    	if(jQuery.inArray((b.id).toString(), a) !== -1)
						    	{
						    		benef.push(b)
						    	}
							});

		     				benef.forEach(function(data) {
		     					var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
		     					if($('#km').val() < 1)
	     						{
									var marker = new google.maps.Marker({
							      		position: new google.maps.LatLng(data.latitude, data.longitude),
							      		map: map,
							      		icon: data.iconmap
							    	});
							    	markers.push(marker);

							    	var template = [
							    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
											'<div class="card">',
												'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
												'<div class="card-body">',
													'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
													'<p class="box-panel-closest__text">' + data.description +'</p>',
													'<a href="#" class="btn button-style pull-right">Ver más</a>',
												'</div>',
											'</div>',
											'<hr>',
										'</div>'
									].join("\n");

									$("#box-panel").append(template);
								}
								else
	     						{
		     						if(distance <= $('#km').val())
									{
										var marker = new google.maps.Marker({
								      		position: new google.maps.LatLng(data.latitude, data.longitude),
								      		map: map,
								      		icon: data.iconmap
								    	});
								    	markers.push(marker);

								    	var template = [
								    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
												'<div class="card">',
													'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
													'<div class="card-body">',
														'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
														'<p class="box-panel-closest__text">' + data.description +'</p>',
														'<a href="#" class="btn button-style pull-right">Ver más</a>',
													'</div>',
												'</div>',
												'<hr>',
											'</div>'
										].join("\n");

										$("#box-panel").append(template);
									}
		     					}
						    });
			        	}
			        }
				});
			});

			$('#apply').click(function() {
				$("div.box-panel2").remove();
				deleteMarkers();
				var marker = new google.maps.Marker({
			      position: pos,
			      map: map
			    });
			    markers.push(marker);

				benefits.forEach(function(data) {
					var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
					var km = $('#km').val();
 					if(km < 1)
 					{
 						km = 1;
 						$('#km').val(1);
 					}
					if(distance <= km)
					{
						var marker = new google.maps.Marker({
				      		position: { lat: data.latitude, lng: data.longitude },
				      		map: map,
				      		icon: data.iconmap
				    	});
				    	markers.push(marker);

				    	var template = [
				    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
								'<div class="card">',
									'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
									'<div class="card-body">',
										'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
										'<p class="box-panel-closest__text">' + data.description +'</p>',
										'<a href="#" class="btn button-style pull-right">Ver más</a>',
									'</div>',
								'</div>',
								'<hr>',
							'</div>'
						].join("\n");

						$("#box-panel").append(template);
					}
				});

				cats.forEach(function(data) {
					$('#box-' + data.id).click(function() {
						if($('#box-' + data.id).is(':checked')) { 
				            a.push(this.value);
				    		$("div.box-panel2").remove();
		     				deleteMarkers();
							var marker = new google.maps.Marker({
						      position: pos,
						      map: map
						    });
						    markers.push(marker);

						    benef = [];

						    jQuery.grep(benefits, function( b ) {
						    	if(jQuery.inArray((b.id).toString(), a) !== -1)
						    	{
						    		benef.push(b)
						    	}
							});

		     				benef.forEach(function(data) {
		     					var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
		     					var km = $('#km').val();
		     					if(km < 1)
		     					{
		     						km = 1;
		     						$('#km').val(1);
		     					}
								if(distance <= km)
								{
									var marker = new google.maps.Marker({
							      		position: new google.maps.LatLng(data.latitude, data.longitude),
							      		map: map,
							      		icon: data.iconmap
							    	});
							    	markers.push(marker);

							    	var template = [
							    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
											'<div class="card">',
												'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
												'<div class="card-body">',
													'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
													'<p class="box-panel-closest__text">' + data.description +'</p>',
													'<a href="#" class="btn button-style pull-right">Ver más</a>',
												'</div>',
											'</div>',
											'<hr>',
										'</div>'
									].join("\n");

									$("#box-panel").append(template);
								}
						    });
				        } else if($('#box-' + data.id).not(':checked')) {
				        	$("div.box-panel2").remove();
				        	const index = a.indexOf(this.value);
				        	a.splice(index, 1)
				        	if(a.length < 1)
				        	{
				        		var marker = new google.maps.Marker({
							      position: pos,
							      map: map
							    });
							    markers.push(marker);
								benefits.forEach(function(data) {
									var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
									var km = $('#km').val();
			     					if(km < 1)
			     					{
			     						km = 1;
			     						$('#km').val(1);
			     					}
									if(distance <= km)
									{
										var marker = new google.maps.Marker({
								      		position: { lat: data.latitude, lng: data.longitude },
								      		map: map,
								      		icon: data.iconmap
								    	});
								    	markers.push(marker);

								    	var template = [
								    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
												'<div class="card">',
													'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
													'<div class="card-body">',
														'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
														'<p class="box-panel-closest__text">' + data.description +'</p>',
														'<a href="#" class="btn button-style pull-right">Ver más</a>',
													'</div>',
												'</div>',
												'<hr>',
											'</div>'
										].join("\n");

										$("#box-panel").append(template);
									}
								});
				        	}
				        	else
				        	{
				        		$("div.box-panel2").remove();
			     				deleteMarkers();
								var marker = new google.maps.Marker({
							      position: pos,
							      map: map
							    });
							    markers.push(marker);

								benef = [];

							    jQuery.grep(benefits, function( b ) {
							    	if(jQuery.inArray((b.id).toString(), a) !== -1)
							    	{
							    		benef.push(b)
							    	}
								});

			     				benef.forEach(function(data) {
			     					var distance = calculateDistance(pos.lat, pos.lng, data.latitude, data.longitude);
			     					var km = $('#km').val();
			     					if(km < 1)
			     					{
			     						km = 1;
			     						$('#km').val(1);
			     					}
									if(distance <= km)
									{
										var marker = new google.maps.Marker({
								      		position: new google.maps.LatLng(data.latitude, data.longitude),
								      		map: map,
								      		icon: data.iconmap
								    	});
								    	markers.push(marker);

								    	var template = [
								    		'<div class="col-lg-12 col-sm-4 col-12 my-2 box-panel2">',
												'<div class="card">',
													'<img class="card-img-top" height="160"  src="data:image/png;base64,' + data.image +'" alt="Card image cap">',
													'<div class="card-body">',
														'<h5 class="box-panel-closest__title">' + data.name  +'</h5>',
														'<p class="box-panel-closest__text">' + data.description +'</p>',
														'<a href="#" class="btn button-style pull-right">Ver más</a>',
													'</div>',
												'</div>',
												'<hr>',
											'</div>'
										].join("\n");

										$("#box-panel").append(template);
									}
							    });
				        	}
				        }
					});
				});
			});
      	}, function() {
        	handleLocationError(true, infoWindow, map.getCenter());
      	});
    } 
    else {
      	// Browser doesn't support Geolocation
      	handleLocationError(false, infoWindow, map.getCenter());
    }


}

function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
}

function clearMarkers() {
    setMapOnAll(null);
}

function deleteMarkers() {
    clearMarkers();
    markers = [];
}

function calculateDistance(lat1, long1, lat2, long2) {
	var km = 111.302;
        
    //1 Grado = 0.01745329 Radianes    
    var degtorad = 0.01745329;
    
    //1 Radian = 57.29577951 Grados
    var radtodeg = 57.29577951; 
    //La formula que calcula la distancia en grados en una esfera, llamada formula de Harvestine. Para mas informacion hay que mirar en Wikipedia
    //http://es.wikipedia.org/wiki/F%C3%B3rmula_del_Haversine
    var dlong = (long1 - long2);
    var dvalue = (Math.sin(lat1 * degtorad) * Math.sin(lat2 * degtorad)) + (Math.cos(lat1 * degtorad) * Math.cos(lat2 * degtorad) * Math.cos(dlong * degtorad)); 
    var dd = Math.acos(dvalue) * radtodeg; 
    return Math.round((dd * km), 2);
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3O3jpRiWG7XwLYU0YRXS9aCsJJF9OKiw&callback=initMap"
async defer></script>
