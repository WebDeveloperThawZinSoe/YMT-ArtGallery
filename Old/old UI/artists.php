<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>

<!-- Section One -->
<div style="background-image: url('image/cover1.jpg');background-position: center;background-attachment: fixed;background-size: cover;height:500px"
    class="jumbotron text-left " style="background-color: white;">
    <div class="container">
        <h1 style="text-transform: uppercase;"> <span style="color:white;">Welcome From YMT</span> <span
                class="secondary-text">Art Gallery</span></h1>
        <p style="color:white;"> <b> Resize this responsive page to see the effect!</b> </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
                    $sql = "SELECT id,name,image FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
         <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:30px">
            <div class="card">
                <img class="card-img-top" src="image/upload/<?php echo $r['image'] ?>" style="height:400px" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $r['name'] ?></h4>
                  
                    <form action="artist-details.php" method="post" >
                                    <input type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                    <input  class="btn btn-primary btn-block" type="submit" name="detail" value="View Detail">
                                </form>
                </div>
            </div>
        </div>
       
        <?php
                        }
                    }
                ?>

       
    </div>
</div>

<?php
    include_once "base/footer.php";
?>