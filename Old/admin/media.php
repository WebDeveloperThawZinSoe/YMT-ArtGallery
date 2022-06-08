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
                            <h1 class="m-0">Media</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Media</li>
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
                                <form action="backend.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Media Name:</label>
                                        <select autoclear type="text" class="form-control" name="media"
                                             required >
                                             <option value="" disabled selected>--- Select Media ---</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="instergram">Instergram</option>
                                            <option value="phone">Phone</option>
                                            <option value="email">Email</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Link:</label>
                                        <input autoclear type="text" class="form-control" placeholder="Enter Link"
                                            name="link" id="pwd">
                                    </div>

                                    <button type="submit" name="media_create" class="btn btn-primary">                                Submit</button>
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
                                <th>Link</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM media ORDER BY id DESC";
                                $result = mysqli_query($database_connection,$sql);
                                if(mysqli_num_rows($result)>0){
                                  foreach($result as $i=>$r){
                                    ?>
                                      <tr>
                                        <td><?php echo ++$i ?></td>
                                        <td><?php echo $r['name'] ?></td>
                                        <td><?php echo $r['link'] ?></td>
                                        
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