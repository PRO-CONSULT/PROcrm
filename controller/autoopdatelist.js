// Start autoopdatering af lister
function startlister() {
	inqlist();
	offerlist();
	orderlist();
var delayInMilliseconds = 60000; //1 second
 setTimeout(function() {
        startlister();
}, delayInMilliseconds);
}


//Inq liste
function inqlist() {
  document.getElementById("menutop1").innerHTML = 'FORSPØRGSLER';
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("inqlist").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller/lister.php?q=inq", true);
  xhttp.send();
}

//offer liste
function offerlist() {
  document.getElementById("menutop2").innerHTML = 'TILBUD';
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("offerlist").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller/lister.php?q=offer", true);
  xhttp.send();
}

//order liste
function orderlist() {
  document.getElementById("menutop3").innerHTML = 'IKKE BESTILT';
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("orderlist").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller/lister.php?q=order", true);
  xhttp.send();
}

