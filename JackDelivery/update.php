<?php
include 'header.php';
include 'Connection1.php';

$uid = $_GET['uid'];

$sql = $db->prepare("SELECT * FROM booking WHERE cno=$uid");
$sql->execute();

$row= $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>
<br>
<table border='3' bordercolor='red' align='center' width='100%'>
<form method="post" enctype="multipart/form-data" action="update_back.php">
	<input type="hidden" name="cno" value="<?php echo $cno;?>">
	<tr>
	<th>Sender Name :<br> <input type="text" name="name" value="<?php echo $cname;?>"></th>
		<th>Receiver Name :<br> <input type="text" name="name" value="<?php echo $rname;?>"></th></tr>
	<tr>
	<th>Sender address:<br> <input type="text" name="name" value="<?php echo $clocation;?>"></th>
		<th>Receiver address: <br><input type="text" name="name" value="<?php echo $rlocation;?>"></th>
	</tr>
	<th>Sender Phone : <br><input type="text" name="name" value="<?php echo $cphoneno;?>">
		<th>Receiver Phone : <br><input type="text" name="name" value="<?php echo $rphoneno;?>"></th>
	</th>
	<center><input type="submit" name="submit" value="UPDATE"></center>
	<center><a href="shipment.php"><u><b>Shipment Lists</u></a></center>
	
	</table>
</form>