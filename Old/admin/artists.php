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
                            <h1 class="m-0">Artists</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Artists</li>
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
                                <form enctype="multipart/form-data" action="backend.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Name:</label>
                                        <input autoclear type="text" class="form-control" name="username"
                                            placeholder="Enter name" required id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Image:</label>
                                        <input  type="file" name="image" required id="pwd">
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="pwd">Bio:</label>
                                        <textarea autoclear class="form-control" name="bio" id="pwd"
                                            placeholder="Enter Biography"></textarea>
                                    </div> -->

                                    <textarea autoclear class="form-control" name="bio" id="pwd"
                                                placeholder="Enter Biography"></textarea>

                                    

                                    <br> 

                                    <button type="submit" name="artists_create" class="btn btn-primary">Create
                                        Artists</button>
                                </form>
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
                                <th>No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>View Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM artist ORDER BY id DESC";
                                $result = mysqli_query($database_connection,$sql);
                                if(mysqli_num_rows($result)>0){
                                  foreach($result as $i=>$r){
                                    ?>
                                      <tr>
                                        <td><?php echo ++$i ?></td>
                                        <td><?php echo $r['name'] ?></td>
                                        <td>
                                            <img src="../image/upload/<?php echo $r['image'] ?>"  class="img-fluid" alt="">
                                        </td>
                                       
                                        <td><form action="artist_detail.php" method="post">
                                          <input  type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                          <input  type="submit" class="btn btn-info" name="artists-detail" value="Detail">
                                        </form></td>
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
    <script>
         ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <?php
    include_once "footer.php";
?>