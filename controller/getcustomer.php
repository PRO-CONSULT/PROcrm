<?php
include '../controller/config.php';
$jobsid = $_GET['q'];

$html = '<input type="hidden" id="ajaxrapportnr';
$html .= '" value="';
$html .= 'rapportnrString';
$html .= '">';
$html .= '<input type="hidden" id="ajaxkundenavn';
$html .= '" value="';
$html .= 'kundenavnString';
$html .= '">';
$html .= '<input type="hidden" id="ajaxrevknr';
$html .= '" value="';
$html .= 'revknrString';
$html .= '">';
    
	$sqljobs = "SELECT * FROM jobs where JobsID = $jobsid";
	$resultjobs = $conn->query($sqljobs);
        while($row = $resultjobs->fetch_assoc()) {$debitorid = $row["debitorid"]; $revk = $row["revk"];}

	$sqljobs = "SELECT * FROM debitor where DebitorID = $debitorid";
	$resultjobs = $conn->query($sqljobs);
        while($row = $resultjobs->fetch_assoc()) {$firma = $row["Firma"]; $postcode = $row["PostCode"];}

$output = str_replace('rapportnrString', $jobsid, $html);
$output = str_replace('kundenavnString', $firma , $output);
$output = str_replace('revknrString', $revk , $output);
		echo($output);

?>