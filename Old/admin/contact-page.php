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
                                <?php
                                    $sql = "SELECT * FROM contact_page ";
                                    $result = mysqli_query($database_connection,$sql);
                                    if($result){
                                        foreach($result as $r){
                                            ?>
                                <form action="backend.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="author">Main Text:</label>
                                        <input type="text" class="form-control" name="main" placeholder="Main Text"
                                            value="<?php echo $r['main_text']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Secondary Text:</label>
                                        <input type="text" class="form-control" name="secondary" placeholder="Secondary Text"
                                            value="<?php echo $r['secondary_text']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Content Text:</label>
                                        <textarea name="content-text" class="form-control" id="" cols="30"
                                            rows="10"><?php echo $r['content_text']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Map:</label>
                                        <textarea name="map" class="form-control" id="" cols="30"
                                            rows="10"><?php echo $r['map']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Address:</label>
                                        <textarea name="address" class="form-control" id="" cols="30"
                                            rows="10"><?php echo $r['address']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Image:</label>
                                        <input  type="file" name="image" required id="pwd">
                                    </div>
                                    <img style="width:100%;height:250px" src="../image/upload/<?php echo $r['image'] ?>" alt="">

                                    <br> <br>
                                    <button type="submit" name="contact_page_update" class="btn btn-primary"> Update </button>

                                    <a href="../contact.php" target="_blank" class="btn btn-primary"> View Page </a>
                                </form>
                                <?php
                                        }
                                    }
                                ?>

                            </div>

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