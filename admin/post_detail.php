<?php
    if(!isset($_POST["post_detail"])){
        header("location:index.php");
    }else{ 
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
                            <h1 class="m-0">Posts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Posts</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php
                $post_detail_id = $_POST["id"];
                $sql = "SELECT * FROM posts WHERE id=$post_detail_id";
                $result = mysqli_query($database_connection,$sql);
                if(mysqli_num_rows($result) > 0 ){
                    foreach($result as $rr){
                        ?>
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <?php
                        include_once "message.php";
                    ?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="well">
                                <form enctype="multipart/form-data" action="backend.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $rr['id'] ?>" >
                                    <div class="form-group">
                                        <label for="username">Title:</label>
                                        <input autoclear type="text" class="form-control" name="title"
                                            placeholder="Enter Title" required id="username" value="<?php echo $rr['title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Select Artists:</label>
                                        <select required class="form-control" name="artists" id="">
                                            <option value="" selected disabled hidden>-- Select artists--</option>
                                            <?php
                                                $sql = "SELECT * FROM artist ORDER BY id DESC";
                                                $result = mysqli_query($database_connection,$sql);
                                                if($result){
                                                    foreach($result as $ar){
                                                        ?>
                                            <option  value="<?php echo $ar['id'] ?>"><?php echo $ar['name'] ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>

                                        </select>
                                    </div>

                                    <img src="../image/upload/<?php echo $rr['image']; ?>" alt="" class="img-responsive" style="width:50%;height: 50%;">
                                    <br> <br>
                                    <div class="form-group">
                                        <label for="pwd">Image:</label>
                                        <input type="file" name="image" required id="pwd">
                                    </div>
                                    



                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <input autoclear type="text" class="form-control" name="price"
                                            placeholder="Enter Price" required id="price" value="<?php echo $rr['price'] ?>">
                                    </div>



                                    <br>
                                    <div class="form-group">
                                        <label for="username">Select Status:</label>
                                        <select required class="form-control" name="status" id="">
                                            <option value="" selected disabled hidden>-- Select Status--</option>
                                            <option value="0">For Sale</option>
                                            <option value="1">Sold Out</option>

                                        </select>
                                    </div>

                                    <textarea autoclear class="form-control" name="description" id="pwd"
                                        placeholder="Enter Description"><?php echo $rr['description']; ?></textarea>

                                    <br>
                                    <button type="submit" name="post_update" class="btn btn-warning">Update
                                        Post</button>
                                </form>

                                <br>

                                <form action="backend.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $rr['id'] ?>">
                                    <input onclick="return confirm('Are you sure you want to delete this posts?');"type="submit" class="btn btn-danger" name="post_delete" value="Delete">
                                </form>
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
            <?php
                    }
                }
            ?>

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

    <?php
    }
?>