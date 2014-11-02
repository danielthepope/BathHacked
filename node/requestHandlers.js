var fs = require("fs");
var http = require("http");

function chart(query, response) {
	console.log("Loading chart.html");

	fs.readFile("../charts/index.html", function(err, html) {
		try {
			if (err) {
				throw err;
			}
			response.writeHead(200, {"Content-Type": "text/html"});
			response.write(html);
			response.end();
		} catch (e) {
			console.log(e.message);
			response.writeHead(404, {"Content-Type": "text/plain"});
			response.write("404 Not found");
			response.end();
		}
	});
}

function localelectionresults(query, response) {
	console.log(query);

	var url = 'http://data.bathhacked.org/resource/ce47-a7ku.json?' + query;

	http.get(url, function(res) {
		var body = '';

		res.on('data', function(chunk) {
			body += chunk;
		});

		res.on('end', function() {
			console.log("Got response: ", body);

			response.writeHead(200, {"Content-Type": "text/json"});
			response.write(body);
			response.end();
		});
	}).on('error', function(e) {
		  console.log("Got error: ", e);
	});
}

exports.chart = chart;
exports.localelectionresults = localelectionresults;