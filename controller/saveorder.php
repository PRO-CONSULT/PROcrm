<?php
include '../controller/config.php';
$jobsid = $_GET['q'];
$revk = $_GET['z'];
$PlusType = $_GET['a'];

$sql = "INSERT INTO debitor (Firma)
VALUES ('$jobsid')";

$conn->query($sql);

$sqljobs = "SELECT * FROM debitor where Firma = '$jobsid'";
$resultjobs = $conn->query($sqljobs);
while($row = $resultjobs->fetch_assoc()) {$debitorid = $row["DebitorID"];}

$sql = "INSERT INTO jobs (debitorid,flag,revk)
VALUES ($debitorid, '$PlusType','$revk')";


if ($conn->query($sql) === TRUE) {

$sqljobs = "SELECT JobsID FROM jobs ORDER BY JobsID DESC LIMIT 1";
$resultjobs = $conn->query($sqljobs);
while($row = $resultjobs->fetch_assoc()) {$jobsid = $row["JobsID"];}

?>

<div style="display: inline-block; height: 100%; background-color: green; color: #fff; width: 100%; font-size: 20px;">Du har nu Oprettet: <?php echo $jobsid;?></div>
<input id="SagNoFromSave" type="hidden" value="<?php echo $jobsid;?>">

<?php
  echo " ";
}
$conn->close();

?>