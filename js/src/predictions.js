var predictionData1 = [ {
  "elected" : false,
  "name" : "Steve Bradley",
  "votes" : "782",
  "party" : "Liberal Democrats"
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
  "votes" : "333",
  "party" : "Green Party"
}
, {
  "elected" : false,
  "name" : "Ben Howlett",
  "votes" : "308",
  "party" : "Conservative Party"
}
, {
  "elected" : false,
  "name" : "Julian Deverell",
  "votes" : "300",
  "party" : "UKIP"
}
 ];
var predictionData2 = [ {
  "elected" : false,
  "name" : "Steve Bradley",
  "votes" : "1",
  "party" : "Liberal Democrats"
}
, {
  "elected" : false,
  "name" : "Ollie Middleton",
  "votes" : "2",
  "party" : "Labour Party"
}
, {
  "elected" : false,
  "name" : "Dominic Tristram",
  "votes" : "3",
  "party" : "Green Party"
}
, {
  "elected" : false,
  "name" : "Ben Howlett",
  "votes" : "4",
  "party" : "Conservative Party"
}
, {
  "elected" : false,
  "name" : "Julian Deverell",
  "votes" : "5",
  "party" : "UKIP"
}
 ];

var predictionContext = document.getElementById("predictionChart").getContext("2d");
var predictionChart = new Chart(predictionContext).PolarArea(predictionData1);
var idealContext = document.getElementById("idealChart").getContext("2d");
var idealChart = new Chart(idealContext).PolarArea(predictionData2);