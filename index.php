<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="./css/style.css">
<title>KoopEenKip</title>

</head>
<body>

<main class="container-fluid">
<div class="row">
    <div class="col-12 px-0">
    <?php include("./banner.php"); ?>
</div>
</div>
<div class="row">
    <div class="col-12 px-0">
    <?php include("./navbar.php"); ?>
</div>
</div>
<div class="row">
    <div class="col-12">
    <?php 
        include("./content.php"); 
    ?>
</div>
</div>
<div class="row fixed-bottom">
    <div class="col-12 px-0">
    <?php include("./footer.php"); ?>
</div>
</div>

</main>




<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>