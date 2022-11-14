<?php
include 'Connection1.php';
$sql = $db->prepare("SELECT * FROM `booking`");
$sql->execute();
?>
<center>
	<a><img src="image/Screenshot (772).png" width="100%" height="200"></a><br>

<a href="insert.php"><b>Add New Data</b></a><br>

<table border="4" bordercolor='red' width='100%' >
<colgroup>
    <col span="7" style="background-color: #D6EEEE">
  </colgroup>
	<th>Customer Name</th>
	<th>Customer location</th>
	<th>Customer Phone number</th>
	<th>Reseiver location</th>
	<th>Receiver Phone number</th>
	<th>Receiver Name</th>
	<th>Update</th>
	<th>Delete</th>
	
	<?php 
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
	    extract($row);
	?>
	<tr border-bottom: 1px solid #ddd;>
		<td><?php echo $cname; ?></td>
		<td><?php echo $clocation; ?></td>
		<td><?php echo $cphoneno; ?></td>
		<td><?php echo $rlocation; ?></td>
		<td><?php echo $rphoneno; ?></td>
		<td><?php echo $rname; ?></td>
		<td><a href="update.php?uid=<?php echo $cno;?>"> &#9745;</a></td>
		<td><a href="delete.php?did=<?php echo $cno;?>"> &#9746;</a></td>
	</tr>
	<?php } ?>
</table>
	<a href="home.php"><b>logout</b></a></center>
	
	