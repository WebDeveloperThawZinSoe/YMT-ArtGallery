<?php
    if(isset($_POST['id'])){
        ?>
<?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>
<?php
        $id = $_POST['id'];
        $sql = "SELECT * FROM artist WHERE id =$id";
        $result = mysqli_query($database_connection, $sql);
        if(mysqli_num_rows($result) == 1 ){
            foreach($result as $r){
                ?>
<section style="background-color:gray" data-bs-version="5.1" class="testimonials1 cid-t7w3iNSIly" id="testimonials1-r">




    <div class="container">



        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="image-wrapper">
                    <img src="image/upload/<?php echo $r['image'] ?>">
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <p class="mbr-text mbr-fonts-style mb-4 display-7"><?php echo $r['bio'] ?></p>
                    <p class="name mbr-fonts-style mb-1 display-4">
                        <strong><?php echo $r['name'] ?></strong>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color:gray" data-bs-version="5.1" class="gallery1 cid-t7w3lM9bc2" id="gallery1-s">


    <div class="container">
        <div class="mbr-section-head">
            <h4 style="font-size: 28px;" class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>His Art</strong>
            </h4>

        </div>
        <div class="row mt-4">
            <?php
                $sql2 = "SELECT * FROM posts WHERE artist_id=$id";
                $result2 = mysqli_query($database_connection,$sql2);
                if($result2){
                    foreach($result2 as $rr){
                        ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="image/upload/<?php echo $rr['image'] ?>" alt="<?php echo $rr['title']?>">
                    </div>


                </div>
            </div>
            <?php
                    }
                }
            ?>

        </div>
    </div>
</section>


<?php
            }
        }
    ?>





<?php
    include "footer.php";
  ?>
<?php
    }else{
        header("location:index.php");
    }
?>