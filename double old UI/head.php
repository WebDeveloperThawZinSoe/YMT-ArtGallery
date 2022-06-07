<?php
session_start();
$host = "localhost";
$database = "ymt";
$username = "root";
$password = "";

$database_connection = mysqli_connect($host,$username,$password,$database);

if(!$database_connection){
    echo("HTTP/1.1 500 Internal Server Error");
}

?>
<!DOCTYPE html>
<html  >
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/78-logo-old.jpg" type="image/x-icon">

  
  <?php
        $sql = "SELECT * FROM seo";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            foreach($result as $r){
                ?>
    <meta name="description" content="<?php echo $r['description']?>">
    <meta name="keywords" content="<?php echo $r['keywords']?>">
    <meta name="author" content="<?php echo $r['author']?>">
    <?php
            }
        }
    ?>
  
  <title>YMT Art Gallery</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Sweet Alert 2 -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
          #nav-style:hover{
            background-color: black !important;
            color: gold !important;
          }
          .cid-t7w2E2zmxP{
            background-image: url('image/upload/cover1.jpg') !important;
          }
          .cid-t7bNv6lOnP{
            background-color: gray !important;
          }
          .cid-t7bUAjDMbW{
            background-color: gray !important;
          }
          .cid-t7w2ViNefn{
            background-color: gray !important;
          }
        </style>
</head>
<body>