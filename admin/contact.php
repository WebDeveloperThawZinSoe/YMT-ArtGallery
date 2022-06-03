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
        <div class="content-wrapper" id="contact-bg">
            <!-- Content Header (Page header) -->
            <div class="content-header" >
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Contact</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" id="contact-bg">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <?php
                        include_once "message.php";
                    ?>
                    <div class="row">
                        <div class="col-md-12 ">
                        <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM contact ORDER BY id DESC";
                                $result = mysqli_query($database_connection,$sql);
                                if(mysqli_num_rows($result)>0){
                                  foreach($result as $i=>$r){
                                    ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $r['title'] ?></td>
                                <td><?php echo $r['phone'] ?></td>
                                <td><?php echo $r['message'] ?></td>
                                <td><?php echo $r['create_date'] ?></td>

                            </tr>
                            <?php
                                  }
                                }
                          ?>
                        </tbody>
                    </table>

                        </div>

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

    <?php
    include_once "footer.php";
?>