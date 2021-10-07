function openNav() {
  document.getElementById("myNav").style.height = "80%";
  document.getElementById("myNav").style.borderWidth = "2px"; 
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.borderWidth = "0px"; 
}

function openovermenu1() {
  document.getElementById("overmenu1").style.minHeight = "220px";
  document.getElementById("overmenu1").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu1").setAttribute('onclick','closeovermenu1()');
  document.getElementById("BottomOverMenu1").innerHTML = "<i class='fas fa-arrow-circle-up'></i>";
  SaveOrder();
}

function closeovermenu1() {
  document.getElementById("overmenu1").style.height = "0%";
  document.getElementById("overmenu1").style.minHeight = "0px";
  document.getElementById("overmenu1").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu1").setAttribute('onclick','openovermenu1()');
  document.getElementById("BottomOverMenu1").innerHTML = "<i class='fas fa-arrow-circle-down'></i>";
}

function openovermenu2() {
  document.getElementById("overmenu2").style.minHeight = "320px";
  document.getElementById("overmenu2").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu2").setAttribute('onclick','closeovermenu2()');
  document.getElementById("BottomOverMenu2").innerHTML = "<i class='fas fa-arrow-circle-up'></i>";
}

function closeovermenu2() {
  document.getElementById("overmenu2").style.height = "0%";
  document.getElementById("overmenu2").style.minHeight = "0px";
  document.getElementById("overmenu2").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu2").setAttribute('onclick','openovermenu2()');
  document.getElementById("BottomOverMenu2").innerHTML = "<i class='fas fa-arrow-circle-down'></i>";
}
function openovermenu3() {
  document.getElementById("overmenu3").style.minHeight = "320px";
  document.getElementById("overmenu3").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu3").setAttribute('onclick','closeovermenu3()');
  document.getElementById("BottomOverMenu3").innerHTML = "<i class='fas fa-arrow-circle-up'></i>";
}

function closeovermenu3() {
  document.getElementById("overmenu3").style.height = "0%";
  document.getElementById("overmenu3").style.minHeight = "0px";
  document.getElementById("overmenu3").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu3").setAttribute('onclick','openovermenu3()');
  document.getElementById("BottomOverMenu3").innerHTML = "<i class='fas fa-arrow-circle-down'></i>";
}