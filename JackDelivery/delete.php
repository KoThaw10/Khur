<?php
include 'Connection1.php';

$did=$_GET['did'];

$sql= $db->prepare("DELETE FROM `booking` WHERE cno=$did");
$sql->execute();
header("Location:shipment.php");
?>