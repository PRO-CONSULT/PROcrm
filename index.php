DEV

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
    $('#pluscontroller').val("Old");
}, delayInMilliseconds);
}



function openinder() {
  var rapportnr = $('input#ajaxrapportnr').val();
  var kundenavn = $('input#ajaxkundenavn').val();
  var revknr = $('input#ajaxrevknr').val();

  document.getElementById("rapportnr").innerHTML = rapportnr;
  $('#inputkundenavn').val(kundenavn);
  document.getElementById("firmanavn").innerHTML = kundenavn;
  $('#revknr').val(revknr);
}

//

function NewInq() {
	ListInputdisabled();
        clearlist();
 	openNav();
        $('#pluscontroller').val("inq");
        document.getElementById("SaveOrder").innerHTML = "Gem Forsprøgesle";
}

function NewOffer() {
	ListInputdisabled();
        clearlist();
 	openNav();
        $('#pluscontroller').val("offer");
        document.getElementById("SaveOrder").innerHTML = "Gem Tilbud";
}

function NewOrder() {
	ListInputdisabled();
        clearlist();
 	openNav();
        $('#pluscontroller').val("order");
        document.getElementById("SaveOrder").innerHTML = "Gem Order";
}

function clearlist() {
        document.getElementById("rapportnr").innerHTML = "-";
        $('#inputkundenavn').val("");
  	document.getElementById("firmanavn").innerHTML = ".";
	$('#revknr').val("");  
}

function ListInputdisabled() {
	$("#revknr").prop('disabled', true);
}

function ListInputenabled() {
	$("#revknr").prop('disabled', false);
}


function SaveOrder() {
  var PlusType =  $('input#pluscontroller').val();
   if(PlusType !== "Old"){
  ListInputenabled();
  var savekundenavn = $('input#inputkundenavn').val();
  var saverevknr = $('input#revknr').val();
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("status").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "controller/saveorder.php?q="+savekundenavn+"&z="+saverevknr+"&a="+PlusType, true);
  xhttp.send();
  }
  document.getElementById("SaveOrder").innerHTML = "Opdater Sag";
  $('#pluscontroller').val("Old"); 
  startlister();
  var delayInMilliseconds = 5000; //1 second
  setTimeout(function() {
  document.getElementById("status").innerHTML = "";
}, delayInMilliseconds); 
 }
  
</script>

<?php $conn->close(); ?>
</body>
<input type="hidden" id="pluscontroller">
</html>
