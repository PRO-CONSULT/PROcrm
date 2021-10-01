<!DOCTYPE html>
<html>
<h18:44 27-09-2021ead>
<link rel="stylesheet" href="controller/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
<?php $titel='PROcrm V. Alpha 1.0';?>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="author" content="Otto Algreen For PRO-CONSULT A/S">
<title><?php echo $titel;?></title>
</head>
<body onload="loadoversigt();">
<?php include 'controller/modul-controller.php'; ?>
<?php include 'controller/config.php'; ?>
<?php include 'maingrafik/main.php'; ?>

<div id="txtHint"></div>
<br>
<script>
// database op slag

// Start Ready
function listehent(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller/getcustomer.php?q="+str, true);
  xhttp.send();
   var delayInMilliseconds = 100; //1 second
 setTimeout(function() {
 openinder();
 openNav();
}, delayInMilliseconds);




}

function openinder() {
  var rapportnr = $('input#ajaxrapportnr').val();
  var kundenavn = $('input#ajaxkundenavn').val();
  var revknr = $('input#ajaxrevknr').val();

  document.getElementById("rapportnr").innerHTML = rapportnr;
  document.getElementById("kundenavn").innerHTML = kundenavn;
  document.getElementById("firmanavn").innerHTML = kundenavn;
  $('#revknr').val(revknr);
}

//

function openNav() {
  document.getElementById("myNav").style.height = "80%";
  document.getElementById("myNav").style.borderWidth = "2px"; 
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.borderWidth = "0px"; 
}
</script>
<script>
function openovermenu1() {
  document.getElementById("overmenu1").style.minHeight = "220px";
  document.getElementById("overmenu1").style.borderWidth = "2px"; 
  document.getElementById("BottomOverMenu1").setAttribute('onclick','closeovermenu1()');
  document.getElementById("BottomOverMenu1").innerHTML = "<i class='fas fa-arrow-circle-up'></i>";
}

function closeovermenu1() {
  document.getElementById("overmenu1").style.height = "0%";
  document.getElementById("overmenu1").style.minHeight = "0px";
  document.getElementById("overmenu1").style.borderWidth = "0px"; 
  document.getElementById("BottomOverMenu1").setAttribute('onclick','openovermenu1()');
  document.getElementById("BottomOverMenu1").innerHTML = "<i class='fas fa-arrow-circle-down'></i>";
}
</script>
<script>
function openovermenu2() {
  document.getElementById("overmenu2").style.minHeight = "320px";
  document.getElementById("overmenu2").style.borderWidth = "2px"; 
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
</script>
<script>
function openovermenu3() {
  document.getElementById("overmenu3").style.minHeight = "320px";
  document.getElementById("overmenu3").style.borderWidth = "2px"; 
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
</script>

<?php $conn->close(); ?>
</body>

</html>