<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Daterange picker -->

    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


</head>

<?php
  session_start();
  include "database.php";

  if(!isset($_SESSION['user']) || !isset($_SESSION['password'])){
    header("location:login.php");
  }

 
?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php
        ## include_once "loading.php";
    ?>

        <?php
        include_once "slidebar.php";
      
    ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">View Posts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">View Posts</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <?php
                        include_once "message.php";
                    ?>
                    <div class="row">
                        <?php
                            $sql = "SELECT * FROM posts ORDER BY id DESC";
                            $result = mysqli_query($database_connection,$sql);
                            if($result){
                                foreach($result as $r){
                                    ?>
                        <div class="col-md-6 ">
                            <div class="well">
                                <div class="card">
                                    <img src="../image/upload/<?php echo $r['image']?>" alt="Avatar" style="width:100%">
                                    <div class="container">
                                        <h4><b><?php echo $r['title'] ?></b></h4>
                                        <b><?php echo $r['price'] ?> MMKS | 
                                        <span><?php 
                                        $status = $r['status'];
                                        if($status == 0){
                                            ?>
                                            <span style="color:green">Sell</span>
                                                
                                            <?php
                                        }else if($status == 1){
                                            ?>
                                             <span style="color:red"> Sold Out</span>
                                               
                                            <?php
                                        }
                                        ?></span>
                                    </b>

                                        <p><?php echo $r['description'] ?></p>
                                        <button  class="btn btn-primary mb-4"> Detail </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>


                        

                        <!-- ./col -->
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- Main row -->


                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        include_once "footer_credit.php";
    ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script>

    </script>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

    <script src="dist/js/adminlte.js"></script>

</body>

</html>