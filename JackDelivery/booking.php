<?php
include 'header.php';
?>
<br>
<div class="container-fluid mx-lg-3" align='center'>
<form method="POST" enctype="multipart/form-data" >
	<table border='0'  width='100%'>
	<tr>
	<th>Sender Name: <br><input type="text" name="cname"><br>
	From Location:<br> <input type="text" name="clocation"><br>
	Sender Phone:<br> <input type="text" name="cphoneno"><br>
	
	</tr>	
	<tr>
	<th>To Location:<br> <input type="text" name="rlocation"><br>
	Receiver Phone: <br><input type="text" name="rphoneno"><br>
	Receiver Name: <br><input type="text" name="rname"><br>
	<input type="submit" name="submit" value="submit">
	</th>
	
	</table>
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
                echo "<center>Booking  successfully</center>";
            }
            else {
                echo "failed" ;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
}


?><br>
