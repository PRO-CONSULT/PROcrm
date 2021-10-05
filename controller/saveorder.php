<?php
include '../controller/config.php';
print_r($jobsid = $_GET['q']);
print_r($revk = $_GET['z']);


$sql = "INSERT INTO debitor (Firma)
VALUES ('$jobsid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sqljobs = "SELECT * FROM debitor where Firma = '$jobsid'";
$resultjobs = $conn->query($sqljobs);
while($row = $resultjobs->fetch_assoc()) {$debitorid = $row["DebitorID"];}


$sql = "INSERT INTO jobs (debitorid,flag,revk)
VALUES ($debitorid, 'inq','$revk')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>