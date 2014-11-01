var lib = '#FFC000';
var con = '#0070C0';
var lab = '#FF0000';
var green = '#008000';
var ind = '#808080';
var candidates = [
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Manda Rigby",
		party: "Liberal Democrats",
		votes: 773,
		elected: true
	},
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Brian John Webber",
		party: "Conservative Party",
		votes: 717,
		elected: true
	},
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Jay Oliver Risbridger",
		party: "Liberal Democrats",
		votes: 662,
		elected: false
	},
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Gladys Pek Yue MacRae",
		party: "Conservative Party",
		votes: 646,
		elected: false
	},
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Ian James Martin",
		party: "Green Party",
		votes: 436,
		elected: false
	},
	{
		constituency: "Bath",
		ward: "Abbey",
		name: "Adrian Bateman",
		party: "Labour Party",
		votes: 323,
		elected: false
	}
];
var candidates2 = [
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Nicholas John Coombes",
		party: "Liberal Democrats",
		votes: 740
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "David John Martin",
		party: "Liberal Democrats",
		votes: 657
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Tony Hickman",
		party: "Conservative Party",
		votes: 528
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Johnny Kidney",
		party: "Conservative Party",
		votes: 528
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Katharine Anne Miles",
		party: "Green Party",
		votes: 155
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Peter Marsh",
		party: "Labour Party",
		votes: 153
	},
	{
		constituency: "Bath",
		ward: "Bathwick",
		name: "Jenny Rust",
		party: "Green Party",
		votes: 124
	}
];

function toData(candidates) {
	var data = [];
	var point;
	for (var i = 0; i < candidates.length; i++) {
		point = {};
		point.value = candidates[i].votes;
		point.color = getColor(candidates[i].party);
		point.label = candidates[i].name;
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