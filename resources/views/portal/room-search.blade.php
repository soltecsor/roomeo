@extends('portal.layouts.app')

@section('content')
		<!--
		================================================== -->
		<section id="plans-section" class="about-section bg-white sec-ptb-120 pt-0 mt-70 clearfix">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-title text-center">
						<span class="small-title"></span>
						<h4 class="big-title mb-0">What you need?</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						@include('portal.inc.busca') 
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div id="map" style="height: 600px; width: 1200px;"></div>
					</div>
				</div>
			</div>
		</section>
		@include('portal.view.properties-search')
		@include('portal.view.partners')
	<script type="application/javascript">

	$('.min').on('change', function(){
		localStorage.setItem('rangeMin',$(this).val())
	})
	$('.max').on('change', function(){
		localStorage.setItem('rangeMax',$(this).val())
	})
	$('#location-input').on('change', function(){
		localStorage.setItem('location',$(this).val())
	})
	$('#to').on('click', function(){
		$(this).datepicker({
			dateFormat: 'yy-mm-dd',
			onSelect: function(dateText, inst) { 
				localStorage.setItem('dateTo',dateText)
			}
		});
	})
	$('#from').on('click', function(){
		$(this).datepicker({
			dateFormat: 'yy-mm-dd',
			onSelect: function(dateText, inst) { 
				localStorage.setItem('dateFrom',dateText)
			}
		});
	})

	function filter(){
		window.location.reload(false);
	}
				

	$(function(){

		   // Initiallise MapKit - you'll need your own long-lived token for this 
		   mapkit.init({
        authorizationCallback: function(done) {
        done('[MY-TOKEN]');
        }
    });

    // Function to draw the route once MapKit has returned a response
    function directionHandler(error, data) {
        data["routes"].forEach(function(route, routeIdx) {
            if (routeIdx !== 0) { return; }
            overlays = [];
            route['path'].forEach(function(path) {
                // This styles the line drawn on the map
                let overlayStyle = new mapkit.Style({
                    lineWidth: 3,
                    strokeColor: "#9b6bcc"
                });
                let overlay = new mapkit.PolylineOverlay(path, {
                    style: overlayStyle
                });
                overlays.push(overlay);
            });
            map.addOverlays(overlays);
        });
    }

    // This asks MapKit for directions and when it gets a response sends it to directionHandler
    function computeDirections(origin,destination) {
        let directionsOptions = { 
            origin: origin, 
            destination: destination, 
            transportType: mapkit.Directions.Transport.Walking 
        };
        directions.route(directionsOptions, directionHandler);
    }   

    // This sets the initial region, but is overridden when all points have been potted to automatically set the bounds
    var myRegion = new mapkit.CoordinateRegion(
        new mapkit.Coordinate(55.9496320, -3.1866360),
        new mapkit.CoordinateSpan(0.05, 0.05)
    );

    var map = new mapkit.Map("map");
    map.region = myRegion;


    var myAnnotations = [];
    // lastWaypoint variable is 'unset' initially so the map doesn't try and find a route to the lastWaypoint for the first point of the route
    var lastWaypoint = "unset";
    var directions = new mapkit.Directions();

    // Array of co-ordinates and label for marker
    waypoints = [
        {name:'Sofi’s Bar',lat:55.9746308,lon:-3.1722282},
        {name:'TThe Roseleaf Cafe',lat:55.975992,lon:-3.173474},
        {name:'Hemingway’s',lat:55.9763631,lon:-3.1706564},
        {name:'Teuchter’s Landing',lat:55.9774693,lon:-3.1713826},
        {name:'The King’s Wark',lat:55.9761425,lon:-3.1695419},
        {name:'Malt and Hops',lat:55.975885,lon:-3.1698957},
        {name:'The Carrier’s Quarters',lat:55.9760813,lon:-3.1685323},
        {name:'Noble’s',lat:55.974905,lon:-3.16714},
        {name:'The Fly Half',lat:55.9747906,lon:-3.1674496},
        {name:'Port O’ Leith',lat:55.974596,lon:-3.167525}
    ];  

    // Loop through the array and create marker for each    
    waypoints.forEach(function(data) {
        var myAnnotation = new mapkit.MarkerAnnotation(new mapkit.Coordinate(data['lat'],data['lon']), { 
            color: "#9b6bcc", 
            title: data['name']
        });
        myAnnotations.push(myAnnotation);
        // As long as this isn't the first point on the route, draw a route back to the last point
        if(lastWaypoint!="unset") {
            computeDirections(lastWaypoint,new mapkit.Coordinate(data['lat'],data['lon']));
        }
        lastWaypoint = new mapkit.Coordinate(data['lat'],data['lon']);
    });
    map.showItems(myAnnotations);       	
		
	})

</script>
		
@endsection