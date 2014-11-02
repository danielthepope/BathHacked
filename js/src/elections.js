var lib = '#FDBB30';
var con = '#0087DC';
var lab = '#DC241f';
var green = '#6AB023';
var ind = '#808080';
var ukip = '#70147A';
var candidates = [];

var turnoutData = {
	labels: [""],
	datasets: [
		{
			label: "",
			fillColor: "#0070C0",
			data: [0]
		}
	]
};

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
	if (partyName === "UKIP") return ukip;
	else return ind;
}
function refresh(data) {
	myNewChart.destroy();
	myNewChart = new Chart(ctx).PolarArea(data);
	$(ctx).height(600);
	$(ctx).width(600);
}
function reloadTurnoutChart() {
	turnoutChart.destroy();
	turnoutChart = new Chart(turnoutContext).Bar(turnoutData, turnoutOptions);
	$(turnoutContext).height(300);
	$(turnoutContext).height(75);
}

$('.wardButton').on('click', function() {
	var wardName = $(this).text();
	console.log('Clicked ward button ' + wardName);
	var result = [];
	$.ajax({
		"url":"http://data.bathhacked.org/resource/ce47-a7ku.json?$where=year=2011%20AND%20ward=%27" + $(this).text() + "%27",
		"type":"get",
		"dataType":"json",
		"success": function(data) {
			// console.log('Data is '+data);
			candidates = data;
			$('#wardLabel').text(wardName);
			refresh(toData(candidates));
			// console.log('refreshed');
		},
		"error": function(jqXHR, status, error) {
			console.log('ERROR ' + error.message);
		}
	});
	$.ajax({
		"url":"http://data.bathhacked.org/resource/m4j8-2iqf.json?$select=turnout_percentage&$where=year=2011%20AND%20ward=%27" + $(this).text() + "%27",
		"type":"get",
		"dataType":"json",
		"success": function(data) {
			console.log('success');
			var percentage = data[0].turnout_percentage;
			$('#turnoutLabel').text(percentage + '% turnout');
			turnoutData.datasets[0].data[0] = percentage;
			reloadTurnoutChart();
			console.log('refreshed');
		},
		"error": function(jqXHR, status, error) {
			// console.log('ERROR ' + error.message);
		}
	});
});

var data = toData(candidates);
var turnoutOptions = {
	barShowStroke: false,
	scaleShowGridLines: false,
	//showTooltips: false,
	scaleOverride: true,
	scaleSteps: 1,
	scaleStepWidth: 100,
	scaleStartValue: 0,
	showScale: false
};

var ctxContainer = document.getElementById("chart1");
if (ctxContainer) {
	var ctx = ctxContainer.getContext("2d");
	var myNewChart = new Chart(ctx).PolarArea(data);
	var turnoutContext = document.getElementById("turnoutChart").getContext("2d");
	var turnoutChart = new Chart(turnoutContext).Bar(turnoutData, turnoutOptions);
}
