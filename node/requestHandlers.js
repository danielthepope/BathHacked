var exec = require("child_process").exec;
var fs = require("fs");

function start(query, response) {
	console.log("Request handler for start was called");
	var content = "empty";

	exec("dir", function(error, stdout, stderr) {
		response.writeHead(200, {"Content-Type": "text/plain"});
		response.write(stdout);
		response.end();
	});
}

function upload(query, response) {
	console.log("Request handler for upload was called");
	response.writeHead(200, {"Content-Type": "text/plain"});
	response.write("Hello upload");
	response.end();
}

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
	response.writeHead(200, {"Content-Type": "text/json"});
	response.write('[{ "constituency": "Bath", "ward": "Bathwick", "name": "Peter Marsh", "party": "Labour Party", "votes": 153 }, { "constituency": "Bath", "ward": "Bathwick", "name": "Jenny Rust", "party": "Green Party", "votes": 124 }]');
	response.end();
}

exports.start = start;
exports.upload = upload;
exports.chart = chart;
exports.localelectionresults = localelectionresults;