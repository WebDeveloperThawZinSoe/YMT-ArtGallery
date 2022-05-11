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
                            <h1 class="m-0">Member</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Member</li>
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
                                        <label for="username">Username:</label>
                                        <input autoclear type="text" class="form-control" name="username"
                                            placeholder="Enter Username" required id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input autoclear type="password" class="form-control" placeholder="Enter password"
                                            name="password" id="pwd">
                                    </div>

                                    <button type="submit" name="account_create" class="btn btn-primary">Create
                                        Account</button>
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
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM account ORDER BY id DESC";
                                $result = mysqli_query($database_connection,$sql);
                                if(mysqli_num_rows($result)>0){
                                  foreach($result as $i=>$r){
                                    ?>
                                      <tr>
                                        <td><?php echo ++$i ?></td>
                                        <td><?php echo $r['name'] ?></td>
                                        <td><?php echo $r['create_date'] ?></td>
                                        <td><form action="backend.php" method="post">
                                          <input  type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                          <input onclick="return confirm('Are you sure you want to delete this item?');" type="submit" class="btn btn-danger" name="account-delete" value="Delete">
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

    <?php
    include_once "footer.php";
?>