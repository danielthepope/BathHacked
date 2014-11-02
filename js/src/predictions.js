var predictionData1 = [ {
  "elected" : false,
  "name" : "Steve Bradley",
  "votes" : "782",
  "party" : "Liberal Democrats"
}
, {
  "elected" : false,
  "name" : "Ben Howlett",
  "votes" : "455",
  "party" : "Conservative Party"
}
, {
  "elected" : false,
  "name" : "Ollie Middleton",
  "votes" : "380",
  "party" : "Labour Party"
}
, {
  "elected" : false,
  "name" : "Dominic Tristram",
  "votes" : "213",
  "party" : "Green Party"
}
, {
  "elected" : false,
  "name" : "Julian Deverell",
  "votes" : "154",
  "party" : "UKIP"
}
 ];
var predictionData2 = [ {
  "elected" : false,
  "name" : "Ollie Middleton",
  "votes" : "650",
  "party" : "Labour Party"
}
, {
  "elected" : false,
  "name" : "Steve Bradley",
  "votes" : "543",
  "party" : "Liberal Democrats"
}
, {
  "elected" : false,
  "name" : "Dominic Tristram",
  "votes" : "430",
  "party" : "Green Party"
}
, {
  "elected" : false,
  "name" : "Ben Howlett",
  "votes" : "420",
  "party" : "Conservative Party"
}
, {
  "elected" : false,
  "name" : "Julian Deverell",
  "votes" : "200",
  "party" : "UKIP"
}
 ];

var predictionContainer = document.getElementById("predictionChart");
if(predictionContainer) {
  var predictionContext = predictionContainer.getContext("2d");
  var predictionChart = new Chart(predictionContext).PolarArea(toData(predictionData1));
  var idealContext = document.getElementById("idealChart").getContext("2d");
  var idealChart = new Chart(idealContext).PolarArea(toData(predictionData2));
}