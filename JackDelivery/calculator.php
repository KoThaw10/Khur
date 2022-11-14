<?php 
include 'header.php';
?>
<html>
 <head>
 <title>Shipment Calculator</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body><center>
      <h1>Shipment Calculator</h1>
 
 
 <div class="container" style="margin-top: 50px">
 
 <?php
 
 // If the submit button has been pressed
 if(isset($_POST['submit']))
 {
 // Check number values
 if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
 {
 
 {
 $total = $_POST['number1'] * $_POST['number2']; 
 }


 
 // Print total to the browser
 echo "<h1>{$_POST['number1']} Kg  equals {$total}MMKs</h1>";
 
 } else {
 
 // Print error message to the browser
 echo 'Numeric values are required';
 
 }
 }
 // end PHP. Code by webdevtrick.com
 ?>
     <b><a>1 Kg=>2500MMKs</a></b>
     <!-- Calculator form by webdevtrick.com -->
     <form method="post" action="calculator.php">
         <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
         <select name="operation">
          
             <option value="multiply">Multiply</option>
         
         </select>
         <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
         <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
     </form>
     
 </div></center>
 
 </body>
</html>