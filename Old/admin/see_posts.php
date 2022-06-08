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
                                        <form action="post_detail.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                        <button type="submit" name="post_detail"  class="btn btn-primary mb-4"> Detail </button>
                                        </form>
                                      
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