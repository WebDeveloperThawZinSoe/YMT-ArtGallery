<?php
    session_start();
?>
<?php
       
       include_once "database.php";
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>YMT-ArtGallery</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="image/logo.jpg" />
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    *{
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }
    html{
        scroll-behavior: smooth;
        
    }
    body {
        /* background: #eeeeee; */
        font-family: 'Varela Round', sans-serif;
       
    }

    .form-inline {
        display: inline-block;
    }

    .navbar-header.col {
        padding: 0 !important;
    }

   
    .nav-link {
        margin: 0 5px;
    }

    .nav-link img {
        border-radius: 50%;
        width: 36px;
        height: 36px;
        margin: -8px 0;
        float: left;
        margin-right: 10px;
    }

    .navbar .navbar-brand {
        color: #555;
        padding-left: 0;
        font-size: 20px;
        padding-right: 50px;
        font-family: 'Raleway', sans-serif;
    }

    .navbar .navbar-brand b {
        font-weight: bold;
        color: #eb5844;
    }

    .navbar .navbar-nav a:hover,
    .navbar .navbar-nav a:focus {
        color: #f08373 !important;
    }

    .navbar .navbar-nav a.active,
    .navbar .navbar-nav a.active:hover {
        color: #eb5844 !important;
        background: transparent !important;
    }

    .search-box {
        position: relative;
    }

    .search-box input.form-control {
        padding-right: 35px;
        border-radius: 0;
        padding-left: 0;
        border-width: 0 0 1px 0;
        box-shadow: none;
    }

    .search-box input.form-control:focus {
        border-color: #f08373;
    }

    .search-box .input-group-text {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px 0 7px 7px;
        height: 100%;
    }

    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
    }

    .navbar .nav-item i {
        font-size: 18px;
    }

    .navbar .dropdown-item i {
        font-size: 16px;
        min-width: 22px;
    }

    .navbar .nav-item.show>a {
        background: none !important;
    }

    .navbar .dropdown-menu {
        border-radius: 1px;
        border-color: #e5e5e5;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
    }

    .navbar .dropdown-menu a {
        color: #777;
        padding: 8px 20px;
        line-height: normal;
        font-size: 15px;
    }

    .navbar .navbar-form {
        margin-right: 0;
        margin-left: 0;
        border: 0;
    }

    @media (min-width: 992px) {
        .form-inline .input-group {
            width: 250px;
            margin-right: 30px;
        }

    }

    @media (max-width: 991px) {
        .form-inline {
            display: block;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .input-group {
            width: 100%;
        }
        body{
            /* background-color: black;
            color:white; */
        }
        .at-sm{
            color:white !important;
        }
    }

    #myBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 20px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: red;
        /* Set a background color */
        color: white;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 15px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 18px;
        /* Increase font size */
    }

    #myBtn:hover {
        background-color: #555;
        /* Add a dark-grey background on hover */
    }

    
    </style>

</head>

<body>



    <!-- 

Contact Me If You Want Website

Developed By Thaw Zin Soe 
Phone Number +959403077739
Email thawzinsoe.dev@gmail.com 
GitHub https://github.com/WebDeveloperThawZinSoe
WebsiteLink https://webdeveloperthawzinsoe.github.io/Thaw-Zin-Soe/
LinkedIn https://www.linkedin.com/in/thaw-zin-soe-0b92b61a5/

-->