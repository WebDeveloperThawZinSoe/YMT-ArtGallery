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
                            <h1 class="m-0">Contact Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Contact Page</li>
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
                        <div class="col-md-12 ">
                            <div class="well">
                                <h3>Logo</h3>
                                <?php 
                                $sql = "SELECT name FROM logo "; 
                                $result = mysqli_query($database_connection,$sql);
                                if($result){
                                    foreach($result as $r){
                                        ?>
                                <img style="width:300px;height:300px" src="../image/upload/<?php echo $r['name'] ?>"
                                    alt="Logo Image">

                                <?php
                                    }
                                }
                                ?>
                                <br>
                                <form action="backend.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="logo">
                                    <input type="submit" name="change-logo" class="btn btn-warning" value="Change Logo">
                                </form>
                            </div>
                            <br> <br>
                            <form action="backend.php" method="post" enctype="multipart/form-data">
                                <select class="form-control" name="logo-style" id="">
                                    <option value="" selected disabled hidden>-- Select Style--</option>
                                    <option value="rounded">Rounded</option>

                                    <option value="rounded-circle">Circle</option>

                                    <option value="img-thumbnail">Thumbnail</option>
                                    <option value="invisible">Hide</option>
                                </select>

                                <br>
                                <input type="submit" name="change-style-logo" class="btn btn-warning"
                                    value="Change Style Logo">
                            </form>


                        </div>

                        <!-- ./col -->
                    </div>
                    <hr>
                    <!-- /.row -->
                    <!-- Main row -->



                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <div class="container">
                <h3>Background and Color</h3>

            </div>
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