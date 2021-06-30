<!DOCTYPE html>
<html>
<head>
<?php $titel='PROcrm V. Alpha 0.1';
date_default_timezone_set('UTC');?>
<meta charset="UTF-8">
<meta name="description" content="Timer Styring for PROcrm">
<meta name="author" content="Otto Algreen For PRO-CONSULT A/S">
<meta http-equiv="refresh" content="60"/>
<title><?php echo $titel;?></title>
</head>

<body>
<?php
// set the default timezone to use.
date_default_timezone_set('Europe/Copenhagen');

session_start();

echo 'Last time run 1min task '. date("Y-m-d H:i:s");
?>
<br>
<br>

<! ------ 5 Min timer controller ----- ?>
<?php
if(!isset($_SESSION['5mintime'])){
$_SESSION['5mintime'] = 'EVER';
}
if(!isset($_SESSION['5min'])){
echo 'test';
$_SESSION['5min'] = '0';
}
$_SESSION['5min'] = $_SESSION['5min'] + 1;
if($_SESSION['5min'] == '5') {
$_SESSION['5min'] = '0';
$_SESSION['5mintime'] = date("Y-m-d H:i:s");
include 'timer/5min.php';
}
echo "Last time run 5min task ". $_SESSION['5mintime'];  
?>
<br>
<br>
<! --- /// 5 Min timer controller ----- ?>


<! ------ 10 Min timer controller ----- ?>
<?php
if(!isset($_SESSION['10mintime'])){
$_SESSION['10mintime'] = 'EVER';
}
if(!isset($_SESSION['10min'])){
echo 'test';
$_SESSION['10min'] = '0';
}
$_SESSION['10min'] = $_SESSION['10min'] + 1;
if($_SESSION['10min'] == '10') {
$_SESSION['10min'] = '0';
$_SESSION['10mintime'] = date("Y-m-d H:i:s");
include 'timer/10min.php';
}
echo "Last time run 10min task ". $_SESSION['10mintime'];  
?>
<br>
<br>
<! --- /// 10 Min timer controller ----- ?>


<! ------ 30 Min timer controller ----- ?>
<?php
if(!isset($_SESSION['30mintime'])){
$_SESSION['30mintime'] = 'EVER';
}
if(!isset($_SESSION['30min'])){
echo 'test';
$_SESSION['30min'] = '0';
}
$_SESSION['30min'] = $_SESSION['30min'] + 1;
if($_SESSION['30min'] == '30') {
$_SESSION['30min'] = '0';
$_SESSION['30mintime'] = date("Y-m-d H:i:s");
include 'timer/30min.php';
}
echo "Last time run 30min task ". $_SESSION['30mintime'];  
?>
<br>
<br>
<! --- /// 30 Min timer controller ----- ?>


<! ------ 1 hour timer controller ----- ?>
<?php
if(!isset($_SESSION['1hrtime'])){
$_SESSION['1hrtime'] = 'EVER';
}
if(!isset($_SESSION['1hr'])){
echo 'test';
$_SESSION['1hr'] = '0';
}
$_SESSION['1hr'] = $_SESSION['1hr'] + 1;
if($_SESSION['1hr'] == '60') {
$_SESSION['1hr'] = '0';
$_SESSION['1hrtime'] = date("Y-m-d H:i:s");
include 'timer/1hr.php';
}
echo "Last time run 1 hr task ". $_SESSION['1hrtime'];  
?>
<br>
<br>
<! --- /// 1 hour timer controller ----- ?>


<! ------ 1 day timer controller ----- ?>
<?php
if(!isset($_SESSION['1daytime'])){
$_SESSION['1daytime'] = 'EVER';
}
if(!isset($_SESSION['1day'])){
echo 'test';
$_SESSION['1day'] = '0';
}
$_SESSION['1day'] = $_SESSION['1day'] + 1;
if($_SESSION['1day'] == '1440') {
$_SESSION['1day'] = '0';
$_SESSION['1daytime'] = date("Y-m-d H:i:s");
include 'timer/1hr.php';
}
echo "Last time run 1 day task ". $_SESSION['1daytime'];  
?>
<br>
<br>
<! --- /// 1 day timer controller ----- ?>


</body>
</html>