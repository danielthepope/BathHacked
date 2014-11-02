var lib = '#FFC000';
var con = '#0070C0';
var lab = '#FF0000';
var green = '#008000';
var ind = '#808080';
var candidates = [];

function toData(candidates) {
	var data = [];
	var point;
	for (var i = 0; i < candidates.length; i++) {
		point = {};
		point.value = candidates[i].votes;
		point.color = getColor(candidates[i].party);
		point.label = '';
		if (candidates[i].elected) point.label += "ELECTED: ";
		point.label += candidates[i].name;
		data.push(point);
	}
	return data;
}
function getColor(partyName) {
	if (partyName === "Conservative Party") return con;
	if (partyName === "Labour Party") return lab;
	if (partyName === "Liberal Democrats") return lib;
	if (partyName === "Green Party") return green;
	else return ind;
}
function refresh(data) {
	myNewChart.destroy();
	myNewChart = new Chart(ctx).PolarArea(data);
}

$('.wardButton').on('click', function() {
	console.log('Clicked ward button ' + $(this).text());
	var result = [];
	$.ajax({
		"url":"/localelectionresults?$where=year=2011%20AND%20ward=%27" + $(this).text() + "%27",
		"type":"get",
		"dataType":"json",
		"success": function(data) {
			console.log('success');
			candidates = data;
			refresh(toData(candidates));
			console.log('refreshed');
		},
		"error": function(jqXHR, status, error) {
			console.log('ERROR ' + error.message);
		}
	});
});

var data = toData(candidates);

var ctx = document.getElementById("chart1").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);