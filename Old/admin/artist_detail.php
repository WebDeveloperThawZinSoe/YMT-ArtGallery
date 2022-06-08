<?php
    if(!isset($_POST["artists-detail"])){
        header("location:artists.php");
    }
?>

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
                            <h1 class="m-0">Artists Detail</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="artists.php">Artists</a></li>
                                <li class="breadcrumb-item active">Artists Detail</li>
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
                            <?php
                            $id = $_POST['id'];
                            $sql = "SELECT * FROM artist WHERE id=$id";
                            $result = mysqli_query($database_connection,$sql);
                            if($result){
                                foreach($result as $r){
                                    ?>
 <form enctype="multipart/form-data" action="backend.php" method="post">
                                    <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <label for="username">Name:</label>
                                     
                                        <input autoclear type="text" class="form-control" name="username" value="<?php echo $r['name'] ?>"
                                            placeholder="Enter name" required id="username">
                                    </div>
                                    <img style="width: 400px; height:400px" src="../image/upload/<?php echo $r['image'] ?>" alt="">
                                    <div class="form-group">
                                        <label for="pwd">Image:</label>
                                        <input  type="file" name="image" required id="pwd">
                                    </div>

                                

                                    <textarea autoclear class="form-control" name="bio" id="pwd"
                                                placeholder="Enter Biography"><?php echo $r['bio'] ?></textarea>

                                    

                                    <br> 

                                    <button type="submit" name="artists_upgrade" class="btn btn-warning">Upgrade
                                        Artists</button>

                                </form>

                                <br> <br>

                                <form action="backend.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                <button onclick="return confirm('Are you sure you want to delete this item?');" type="submit" name="artists_delete" class="btn btn-danger">Delete
                                        Artists</button>
                                </form>

                            <?php
                                }
                            }
                        ?>
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
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script>
    <?php
    include_once "footer.php";
?>