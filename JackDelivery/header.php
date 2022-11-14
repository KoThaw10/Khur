<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jack Delivery Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
	<a><img src="image/Screenshot (772).png" width="100%" height="200"></a>

  
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid mx-lg-5">
      <a class="navbar-brand" href="#"><b>Jack Delivery Services</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./contactUs.php"><b>Contact Us</b></a>
          </li>
        </ul>

        

        <?php
        if (isset($_SESSION['role'])) { ?>
          
        <?php
        } else { ?>
         <center><a href="./login.php" class="btn btn-primary mx-lg-2">Login</a></center>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>
  <script>
    $(document).ready(function() {
      $('.mdb-select').materialSelect();
    });
  </script>