<!DOCTYPE html>
<html>
<head>
	<title>Simple Map</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
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

	<script>
		// This example requires the Visualization library. Include the libraries=visualization
		// parameter when you first load the API. For example:
		// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">

		var map, heatmap;

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 8,
				center: {lat: 7.7543037, lng: 80.5266382}
			});

			heatmap = new google.maps.visualization.HeatmapLayer({
				data: getPoints(),
				map: map,
				radius:50,
				gradient:changeGradient()
			});

//            var kmzLayer = new google.maps.KmlLayer('http://www.google.com/maps/d/u/0/kml?mid=1lMTSXqIUwgT8LCfeRdTqzDKob1Q&lid=boKivgsAWs4');
//            kmzLayer.setMap(map);
			


		}

		function toggleHeatmap() {
			heatmap.setMap(heatmap.getMap() ? null : map);
		}

		function changeGradient() {
			var gradient = [
				'rgba(255, 255, 255, 0)',
				'rgba(128, 255, 0, 1)',
				'rgba(0, 205, 0, 1)',
				'rgba(1, 139, 0, 1)',
				'rgba(128, 255, 0, 1)',
				'rgba(0, 205, 0, 1)',
				'rgba(1, 139, 0, 1)',
				'rgba(0, 238, 238, 1)',
				'rgba(30, 144, 255, 1)',
				'rgba(0, 178, 238, 1)',
				'rgba(138, 0, 139, 1)',
				'rgba(140, 0, 1, 1)',
				'rgba(205, 0, 0, 1)',
				'rgba(138, 0, 139, 1)',
				'rgba(140, 0, 1, 1)',
				'rgba(205, 133, 0, 1)',
				'rgba(238, 64, 1, 1)',
				'rgba(255, 216, 1, 1)',
				'rgba(255, 255, 1, 1)',
				'rgba(255, 174, 186, 1)',
			]
			return gradient;
			//heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
		}

		function changeRadius() {
			heatmap.set('radius', heatmap.get('radius') ? null : 50);
		}

		function changeOpacity() {
			heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
		}

		// Heatmap data: 500 Points
		function getPoints() {
			return [
				<?php foreach ($locations as $location):?>
                <?php $precipIntensity = (isset($location->response->currently->precipIntensity)) ? $location->response->currently->precipIntensity : 0 ?>
				<?php echo "{location: new google.maps.LatLng(".$location->longitude.", ".$location->latitude."), weight: ".($precipIntensity * 100 )."},";?>

				<?php endforeach;?>
			];
		}

	</script>
</head>
<body>

<div id="floating-panel">
	<button onclick="toggleHeatmap()">Toggle Heatmap</button>
	<!--
	<button onclick="changeGradient()">Change gradient</button>
	<button onclick="changeRadius()">Change radius</button>
	<button onclick="changeOpacity()">Change opacity</button>
	-->
</div>
<div id="map"></div>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdiYJF8wNCqcf1qCSpoe-Al22xsBXBQoA&libraries=visualization&callback=initMap">
</script>

</body>
</html>