function loadScript(){var a=function(){var a=document.createElement("script");a.type="text/javascript",a.src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=initialize",document.body.appendChild(a)};a(),console.log("Loaded")}window.onload=loadScript;
function initialize(){var a=new google.maps.LatLng(51.38,-2.36),e={zoom:6,center:a},t=new google.maps.Map(document.getElementById("map-canvas"),e),n=new google.maps.KmlLayer({url:"https://data.bathhacked.org/download/czyv-tngt/KMZ"});n.setMap(t)}