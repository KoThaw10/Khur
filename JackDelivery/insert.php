<?php 
?>
	<a><img src="image/Screenshot (772).png" width="100%" height="200"></a><br><br>

<div class="container-fluid mx-lg-3" align='center'>
<form method="POST" enctype="multipart/form-data" >
	<table border='2'>
	<tr>
	<th>Sender Name: <br><input type="text" name="cname"></th>
	<th>Sender Location:<br> <input type="text" name="clocation"></th>
	<th>Sender Phone:<br> <input type="text" name="cphoneno"></th>
	</tr>	
	<tr>
	<th>Receiver Location:<br> <input type="text" name="rlocation"></th>
	<th>Receiver Phone: <br><input type="text" name="rphoneno"></th>
	<th>Receiver Name: <br><input type="text" name="rname"></th>
	</tr>
	</table><br>
	<center><input type="submit" name="submit" value="submit"></center>
	<center><a href="shipment.php"><u><b>Shipment Lists</u></a></center>
	
</form></div><br>

<?php
//file_upload
if (isset($_POST['submit'])) {
    
    
    include 'Connection1.php';
    
    
        try {
            $sql="INSERT INTO `booking`( `cname`, `clocation`, `cphoneno`, `rlocation`, `rphoneno`, `rname`)
             VALUES (?,?,?,?,?,?)";
            $sq = $db->prepare($sql);
            $cname=$_POST['cname'];
            $clocation = $_POST['clocation'];
            $cphoneno = $_POST['cphoneno'];
            $rlocation = $_POST['rlocation'];
            $rphoneno = $_POST['rphoneno'];
            $rname=$_POST['rname'];
    
            
            if ($sq->execute(array($cname, $clocation, $cphoneno, $rlocation, $rphoneno,$rname,))) {
                echo "new data inserted successfully";
            }
            else {
                echo "failed" ;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
}


?><br>
