var predictionData1=[{elected:!1,name:"Steve Bradley",votes:"782",party:"Liberal Democrats"},{elected:!1,name:"Ollie Middleton",votes:"380",party:"Labour Party"},{elected:!1,name:"Dominic Tristram",votes:"333",party:"Green Party"},{elected:!1,name:"Ben Howlett",votes:"308",party:"Conservative Party"},{elected:!1,name:"Julian Deverell",votes:"300",party:"UKIP"}],predictionData2=[{elected:!1,name:"Steve Bradley",votes:"1",party:"Liberal Democrats"},{elected:!1,name:"Ollie Middleton",votes:"2",party:"Labour Party"},{elected:!1,name:"Dominic Tristram",votes:"3",party:"Green Party"},{elected:!1,name:"Ben Howlett",votes:"4",party:"Conservative Party"},{elected:!1,name:"Julian Deverell",votes:"5",party:"UKIP"}],predictionContext=document.getElementById("predictionChart").getContext("2d"),predictionChart=new Chart(predictionContext).PolarArea(predictionData1),idealContext=document.getElementById("idealChart").getContext("2d"),idealChart=new Chart(idealContext).PolarArea(predictionData2);