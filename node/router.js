var fs = require("fs");

function route(handle, pathname, query, response) {
	console.log("About to route a request for " + pathname);
	if (typeof handle[pathname] === 'function') {
		return handle[pathname](query, response);
	} else {
		fs.readFile("../" + pathname, function(err, data) {
			try {
				if (err) {
					throw err;
				}
				response.writeHead(200, {"Content-Type": getType(pathname)});
				response.write(data);
				response.end();
			} catch (err) {
				console.log(err.message);
				response.writeHead(404, {"Content-Type": "text/plain"});
				response.write("404 Not found");
				response.end();
			}
		});
	}
}

function getType(pathname) {
	if (endsWith(pathname, '.html')) return "text/html";
	else if (endsWith(pathname, '.js')) return "text/javascript";
	else return "text/plain";
}

function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

exports.route = route;