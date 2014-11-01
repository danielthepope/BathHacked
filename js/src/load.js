function loadScript() {
	var loadMaps = function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&'+'callback=initialize';
		document.body.appendChild(script);
	}
	loadMaps();
	console.log("Loaded");
}

window.onload = loadScript;