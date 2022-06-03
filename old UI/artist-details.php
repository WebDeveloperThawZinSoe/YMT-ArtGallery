<?php
   if(!isset($_POST["detail"])){
        header("location:artists.php");
   }
?>

<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>

<!-- Section One -->

<br> <br>
<?php
            $id = $_POST['id'];
            $sql = "SELECT * FROM artist WHERE id='$id' ";
            $result = mysqli_query($database_connection,$sql);
            if($result){
                foreach($result as $r){
                    ?>

<div class="container">
<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="artists.php">Artists</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $r['name'] ?></li>
            </ol>
        </nav>
    <div class="row">
        
        <div class="col-md-4 col-sm-12">
            <img class="img-responsive" style="width: 100%;height: 400px;" src="image/upload/<?php echo $r['image'] ?>"
                alt="">
            <p style="text-align: center;font-weight: bold;font-size: 18px;"><?php echo $r['name'] ?></p> <br>
            <h3>Biography</h3>
            <p><?php echo $r['bio'] ?></p> <br>
        </div>
        <div class="col-md-8 col-sm-12">
        
            <?php
                    $sql = "SELECT * FROM posts WHERE artist_id='$id'";
                    $result = mysqli_query($database_connection,$sql);
                    if($result){
                        foreach($result as $rr){
                            $status = $rr['status'];
                            
                            if($status == 0){
                                $status = "<span style='color:green'> For Sale </span>";
                            }else if($status == 1){
                                $status = "<span style='color:red'> Sold Out  </span>";
                            }
                            ?>

            <div class="card" style="margin-top:30px">
                <img src="image/upload/<?php echo $rr['image'] ?>" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b><?php echo $rr['title'] ?></b></h4>
                    <p><?php echo $rr['price'] ?> (<?php echo $status ?>)</p>
                </div>
            </div>

            <?php
                        }
                    }
                ?>
        </div>
    </div>
</div>
<?php
                }
            }
        ?>
<?php
    include_once "base/footer.php";
?>