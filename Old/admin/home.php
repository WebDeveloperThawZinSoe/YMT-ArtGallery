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
                            <h1 class="m-0">Home Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Home Page</li>
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

                                <form action="backend.php" method="post" enctype="multipart/form">
                                    <?php
                                        $sql = "SELECT * FROM home_page";
                                        $result = mysqli_query($database_connection,$sql);
                                        if($result){
                                            foreach($result as $r){
                                                ?>

                                    <h3>Display</h3>


                                    <input type="checkbox" name="display" 
                                    <?php $check = $r['status'];
                                    if($check == "on"){
                                        echo "checked";
                                    }
                                    ?>
                                    
                                    >

                                    <hr>
                                    
                                    <h3>Title Section</h3>

                                    <input type="text" class="form-control" placeholder="Enter Title" value="<?php echo $r['title'] ?>" name="title"> <br>

                                    <input type="number" class="form-control" placeholder="Enter Title Size"
                                        name="title_size" value="<?php echo $r['title_size'] ?>" > <br>

                                    <label for="">Title Color</label>
                                    <input type="color" class="form-control" placeholder="" value="<?php echo $r['title_color'] ?>" name="title_color">
                                    <br>

                                    <label for="">Background Color</label>
                                    <input type="color" class="form-control" placeholder="" value="<?php echo $r['bg_color'] ?>" name="bg_color">
                                    <br> <br>

                                    <h3>Text Section</h3>

                                    <textarea type="text" class="form-control" placeholder="Enter Text"
                                        name="text"><?php echo $r['text'] ?></textarea> 
                                    <br>

                                    <input type="number" class="form-control" placeholder="Enter Text Size"
                                        name="text_size" value="<?php echo $r['text_size'] ?>"> <br>

                                    <label for="">Text Color</label>
                                    <input type="color" class="form-control" placeholder="" name="text_color" value="<?php echo $r['text_color'] ?>">
                                    <br>

                                    <!-- <label for="">Text Background Color</label>
                                    <input type="color" class="form-control" placeholder="" name="text_bg_color" value="<?php echo $r['text_bg_color'] ?>">

                                    <br> <br> -->

                                    <h3>Button Section</h3>

                                    <input type="text" name="button_text" class="form-control"
                                        placeholder="Enter Button Text" value="<?php echo $r['button_text'] ?>"> 
                                    <br>

                                    <input type="text" name="button_link" class="form-control"
                                        placeholder="Enter Button Link" value="<?php echo $r['button_link'] ?>">
                                    <br> <br>

                                    <h3> Options </h3>

                                    <input type="text" name="opacity" class="form-control"
                                        placeholder="Enter Opacity Value Between 0 and 1" value="<?php echo $r['opacity'] ?>"> 
                                    <br>

                                    <input type="number" name="width" class="form-control"
                                        placeholder="Enter Width By %" value="<?php echo $r['width'] ?>"> 
                                    <br>

                                    <select class="form-control" name="text_align" id="">
                                        <option value="left">Left</option>
                                        <option value="right">Right</option>
                                        <option value="center">Center</option>
                                    </select>
                                    <br>
                                    <?php
                                            }
                                        }
                                    ?>


                                    <input type="submit" class="btn btn-warning" value="Update" name="home_page">
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