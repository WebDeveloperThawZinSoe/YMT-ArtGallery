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
                            <h1 class="m-0">SEO</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">SEO</li>
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
                                    $sql = "SELECT * FROM seo ORDER BY id DESC";
                                    $result = mysqli_query($database_connection,$sql);
                                    if($result){
                                        foreach($result as $r){
                                            ?>
                                <form action="backend.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Description:</label>
                                        <textarea name="description" class="form-control" id="" cols="30"
                                            rows="10"><?php echo $r['description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Keywords:</label>
                                        <textarea name="keywords" class="form-control" id="" cols="30"
                                            rows="10"><?php echo $r['keywords']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author:</label>
                                        <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo $r['author']; ?>">
                                    </div>

                                    <button type="submit" name="seo_update" class="btn btn-primary"> Update </button>
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

                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Keywords</th>
                                <th>Author</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM seo ORDER BY id DESC";
                                $result = mysqli_query($database_connection,$sql);
                                if(mysqli_num_rows($result)>0){
                                  foreach($result as $i=>$r){
                                    ?>
                            <tr>
                                <td><?php echo $r['description'] ?></td>
                                <td><?php echo $r['keywords'] ?></td>
                                <td><?php echo $r['author'] ?></td>

                            </tr>
                            <?php
                                  }
                                }
                          ?>
                        </tbody>
                    </table>

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