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
                    <?php
                        include_once "message.php";
                    ?>
                        <div class="col-sm-6">
                            <h1 class="m-0">Change Password</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Change Password</li>
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
                    <form action="backend.php" method="post" enctype="multipart/form">
                        <input type="hidden" name="name" value="<?php echo $_SESSION['user'] ?>">
                        <div class="form-group">
                            <label for="username">Current Password:</label>
                            <input autoclear type="text" class="form-control" name="current_pass"
                                placeholder="Enter Current Password" required id="username">
                        </div>

                        <div class="form-group">
                            <label for="username">New Password:</label>
                            <input autoclear type="text" class="form-control" name="new_pass"
                                placeholder="Enter New Password" required id="username">
                        </div>

                        <input type="submit" name="ChangePassword" class="btn btn-primary" value="Change Password">
                       
                    </form>
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