<?php
    include_once "head.php";
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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">


                    <div class="container-fluid">
                        <?php
                        include_once "message.php";
                    ?>
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-md-5 card bg-primary" style="margin-right:4% ;margin-left:4%">
                                <div class="card-body text-center">
                                    <p class="card-text"> Member Count
                                        <?php
                                        $sql = "SELECT * FROM account";
                                        $result = mysqli_query($database_connection, $sql);
                                        if($result){
                                          $count = mysqli_num_rows($result);
                                        }
                                        echo $count;
                                        
                                      ?>

                                    </p>
                                    <a style="color:white" href="account.php">View Detail</a>
                                </div>
                            </div>
                            <div class="col-md-5 card bg-primary">
                                <div class="card-body text-center">
                                    <p class="card-text"> Artists Count
                                        <?php
                                        $sql = "SELECT * FROM artist";
                                        $result = mysqli_query($database_connection, $sql);
                                        if($result){
                                          $count = mysqli_num_rows($result);
                                        }
                                        echo $count;
                                        
                                      ?>

                                    </p>
                                    <a style="color:white" href="artists.php">View Detail</a>
                                </div>
                            </div>

                            <div class="col-md-5 card bg-primary" style="margin-right:4% ;margin-left:4%">
                                <div class="card-body text-center">
                                    <p class="card-text"> Post Count
                                        <?php
                                        $sql = "SELECT * FROM posts";
                                        $result = mysqli_query($database_connection, $sql);
                                        if($result){
                                          $count = mysqli_num_rows($result);
                                        }
                                        echo $count;
                                        
                                      ?>

                                    </p>
                                    <a style="color:white" href="see_posts.php">View Detail</a>
                                </div>
                            </div>
                            <div class="col-md-5 card bg-primary">
                                <div class="card-body text-center">
                                    <p class="card-text"> Contact Count
                                        <?php
                                        $sql = "SELECT * FROM contact";
                                        $result = mysqli_query($database_connection, $sql);
                                        if($result){
                                          $count = mysqli_num_rows($result);
                                        }
                                        echo $count;
                                        
                                      ?>

                                    </p>
                                    <a style="color:white" href="contact.php">View Detail</a>
                                </div>
                            </div>



                        </div>
                    </div>
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

    <?php
    include_once "footer.php";
?>