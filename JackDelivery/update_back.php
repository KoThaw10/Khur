<?php
include'header.php';
include 'Connection1.php';
$cno=$_POST['cno'];
$cname=$_POST['cname'];
$clocation = $_POST['clocation'];
$cphoneno = $_POST['cphoneno'];
$rlocation = $_POST['rlocation'];
$rphoneno = $_POST['rphoneno'];
$rname=$_POST['rname'];

$sql=$db->prepare("UPDATE `booking` SET `cno`='$cno',`cname`='$cname',`clocation`='$clocation',
`cphoneno`='$cphoneno',`rlocation`='$rlocation',`rphoneno`='$rphoneno',
`rname`='$rname'WHERE 1");
$sql->execute();
?>
header("Location: shipment.php");