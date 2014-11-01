function initialize() {
	var bath = new google.maps.LatLng(51.3800, -2.3600);
	var mapOptions = {
		zoom: 6,
		center: bath
	}
	var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);

	var ctaLayer = new google.maps.KmlLayer({
		url: 'https://data.bathhacked.org/download/czyv-tngt/KMZ'
	});
	ctaLayer.setMap(map);
}