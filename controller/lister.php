<?php
$listtype = $_GET['q'];
// $listver = $_GET['z'];

include '../controller/config.php';

$html = '<button onclick="listehent(this.value)" value="';
$html .= 'jobnrString';
$html .= '" id="forlist">';
$html .= 'jobnrString';
$html .= '</button><br>';
    
	$sqljobslist = "SELECT * FROM jobs where Flag = '$listtype'";
	$resultjobslist = $conn->query($sqljobslist);
        while($row = $resultjobslist->fetch_assoc()) {$jobsidlist = $row["JobsID"];
                $output = str_replace('jobnrString', $jobsidlist, $html);
		echo($output);
}



?>
