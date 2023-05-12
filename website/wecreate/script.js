

setInterval(() => {

          fetch("https://htmonitor.000webhostapp.com/api/read.php")
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      document.getElementById("hum1").innerHTML = data.hum1;
	  document.getElementById("temp1").innerHTML = data.temp1;
	  document.getElementById("hum2").innerHTML = data.hum2;
	  document.getElementById("temp2").innerHTML = data.temp2;
	  document.getElementById("hum3").innerHTML = data.hum3;
	  document.getElementById("temp3").innerHTML = data.temp3;
	  document.getElementById("hum4").innerHTML = data.hum4;
	  document.getElementById("temp4").innerHTML = data.temp4;
    })
    .catch((err) => {
      console.error(err);
    });

     
}, 1000);


