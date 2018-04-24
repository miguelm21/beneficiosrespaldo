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
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="data:image/png;base64, {{ $benefit->image }}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">{{ $benefit->name }}</h5>
					<p class="card-text">{{ $benefit->description }}</p>
					<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
				</div>
			</div>
		</div>
		<div class="col-12">
			<div style="width: 300px; height: 300px">
				<div class="box-img-gps__gps"><div id="map"></div></div>
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
var map;

function initMap() {
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

		    var benefit = {!! json_encode($benefit) !!}

		    var distance = calculateDistance(pos.lat, pos.lng, benefit.latitude, benefit.longitude);

		    var contentString = 
		      '<div class="container">Te encuentras a una distancia de ' + distance + 'KM' +
			  '</div>';

			var infowindow = new google.maps.InfoWindow({
			    content: contentString
			});

		    var marker = new google.maps.Marker({
	      		position: { lat: benefit.latitude, lng: benefit.longitude },
	      		map: map,
	      		icon: benefit.iconmap
	    	});

	    	marker.addListener('click', function() {
	    		if(infowindow)
	    		{
	    			infowindow.close();
	    			infowindow.open(map, marker);
	    		}
	    		else
	    		{
	    			infowindow.open(map, marker);
	    		}
			    
			});

			var line = new google.maps.Polyline({
			    path: [new google.maps.LatLng(pos.lat, pos.lng), new google.maps.LatLng(benefit.latitude, benefit.longitude)],
			    strokeColor: "#0000FF",
			    strokeOpacity: 1.0,
			    strokeWeight: 10,
			    geodesic: true,
			    map: map
			});
		});
    }
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3O3jpRiWG7XwLYU0YRXS9aCsJJF9OKiw&callback=initMap&libraries=geometry"
async defer></script>
