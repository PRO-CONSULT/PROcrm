<!DOCTYPE html>
<html>
<h18:44 27-09-2021ead>
<link rel="stylesheet" href="controller/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="controller/autoopdatelist.js"></script>
<script src="controller/overmenu.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
<?php $titel='PROcrm V. Alpha 1.0';?>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="author" content="Otto Algreen For PRO-CONSULT A/S">
<title><?php echo $titel;?></title>
</head>
<body onload="startlister();">
<?php include 'controller/modul-controller.php'; ?>
<?php include 'controller/config.php'; ?>
<?php include 'maingrafik/main.php'; ?>

<div id="txtHint"></div>
<br>
<script>


// database op slag

// Start Ready
function listehent(str) {
  ListInputenabled();
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

function NewInq() {
	ListInputdisabled();
        clearlist();
 	openNav();
}

function clearlist() {
        document.getElementById("rapportnr").innerHTML = "-";
  	document.getElementById("kundenavn").innerHTML = ".";
  	document.getElementById("firmanavn").innerHTML = ".";
	$('#revknr').val("");  
}

function ListInputdisabled() {
	$("#revknr").prop('disabled', true);
}

function ListInputenabled() {
	$("#revknr").prop('disabled', false);
}

</script>

<?php $conn->close(); ?>
</body>

</html>