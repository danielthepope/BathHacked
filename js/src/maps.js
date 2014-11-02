function initialize() {
	var bath = new google.maps.LatLng(51.3800, -2.3600);
	// Create an array of styles.
	  var styles = [{
	      featureType: "administrative.locality",
	      stylers: [
	      	{ hue: "#00ffe6" },
	        { lightness: 100 },
	        { visibility: "simplified" }
	      ]
	    }
	  ];

	  // Create a new StyledMapType object, passing it the array of styles,
	  // as well as the name to be displayed on the map type control.
	  var styledMap = new google.maps.StyledMapType(styles,
	    {name: "Styled Map"});

	  // Create a map object, and include the MapTypeId to add
	  // to the map type control.
	  var mapOptions = {
	    zoom: 12,
	    center: bath,
	    mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	    }
	  };
	  var map = new google.maps.Map(document.getElementById('map-canvas'),
	    mapOptions);

	  //Associate the styled map with the MapTypeId and set it to display.
	  map.mapTypes.set('map_style', styledMap);
	  map.setMapTypeId('map_style');
}