<?php
$listtype = $_GET['q'];
// $listver = $_GET['z'];

include '../controller/config.php';

$html = '<button onclick="listehent(this.value)" value="';
$html .= 'jobnrString';
$html .= '" id="forlist">';
$html .= 'jobnrString <br>';
$html .= 'FirmaNavnString';

$html .= '</button><br>';
    
	$sqljobslist = "SELECT * FROM jobs where Flag = '$listtype' ORDER BY JobsID DESC";
	$resultjobslist = $conn->query($sqljobslist);
        while($row = $resultjobslist->fetch_assoc()) {$jobsidlist = $row["JobsID"]; $debitorid = $row["debitorid"];

	$sqljobs = "SELECT * FROM debitor where DebitorID = $debitorid";
	$resultjobs = $conn->query($sqljobs);
        while($row = $resultjobs->fetch_assoc()) {$firma = $row["Firma"];}




                $output = str_replace('jobnrString', $jobsidlist, $html);
                $output = str_replace('FirmaNavnString', $firma, $output);
		echo($output);
}



?>
