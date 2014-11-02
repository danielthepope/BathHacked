var server = require("./server");
var router = require("./router");
var requestHandlers = require('./requestHandlers');

var handle = {};
handle["/"] = requestHandlers.chart;
handle["/chart"] = requestHandlers.chart;
handle["/localelectionresults"] = requestHandlers.localelectionresults;
handle["/turnout"] = requestHandlers.turnout;

server.start(router.route, handle);