function initialize() {
	var bath = new google.maps.LatLng(51.3800, -2.3600);
	var mapOptions = {
		zoom: 1,
		center: bath,
		var styleArray = [{
		featureType: "administrativeArea",
		stylers: [
			{ saturation: -80 }
		]}
	}
	var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);

	// var ctaLayer = new google.maps.KmlLayer({
	// 	url: 'https://data.bathhacked.org/download/czyv-tngt/KMZ',
	// 	suppressInfoWindows: true
	// });
	// ctaLayer.setMap(map);

	// // Track any open info windows so we can track them
	// var openInfoWindows = {};

	// google.maps.event.addListener(ctaLayer, 'click', function(kmlEvent) {
	// 	showInContentWindow(kmlEvent.latLng, kmlEvent.featureData.description);
	// });

	// var showInContentWindow = function(position, text) {
	// 	var re = /(?=NAME)/gi;
	// 	var match = re.exec(text);
	// 	console.log(match);  // prints "First"
	// 	var content = "<div>" + text +  "</div>";
	// 	if(openInfoWindows.openInfoWindow)
	// 		openInfoWindows.openInfoWindow.close();
	// 	var infowindow = new google.maps.InfoWindow({
	// 		content: content, 
	// 		position: position
	// 	})
	// 	openInfoWindows.openInfoWindow = infowindow;
	// 	infowindow.open(map);
	// }
}