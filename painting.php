<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

<style>
.photo-gallery {
    color: #313437;
    background-color: #fff;
}

.photo-gallery p {
    color: #7d8285;
}

.photo-gallery h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: inherit;
}

@media (max-width:767px) {
    .photo-gallery h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px;
    }
}

.photo-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px;
}

.photo-gallery .intro p {
    margin-bottom: 0;
}

.photo-gallery .photos {
    padding-bottom: 20px;
}

.photo-gallery .item {
    padding-bottom: 30px;
}
</style>

<?php
    if(isset($_POST["submit"])){
       $name = htmlspecialchars($_POST["name"]);
       $phone =  htmlspecialchars($_POST["phone"]);
       $address = htmlspecialchars($_POST["address"]);
       $sql = "INSERT INTO contact (title,phone,message) VALUES ('$name','$phone','$address')";
       $result = mysqli_query($database_connection,$sql);
       if($result){
          ?>
<script>
swal("Mail Send Success . Admin with will reply within 24hours.", "", "success");
</script>

<?php
       }
    }
?>



<div class="container">
    <h3 class="text-center"
        style="padding-bottom: 40px;text-decoration: underline;height:1px;color:#eb5844  !important;margin-bottom: 20px;">
        Painting</h3>
    <div class="row">



        <div class="col-md-12">
            <div class="container">
                <div class="intro">

                </div>
                <div class="row photos">
                    <?php
                    $sql = "SELECT * FROM posts ORDER BY id DESC";
                    $result = mysqli_query($database_connection,$sql);
                    if($result){
                        foreach($result as $r){
                            $status = $r['status'];
                            
                            if($status == 0){
                                $status = "For Sale";
                            }else if($status == 1){
                                $status = "Sold Out";
                            }
                            ?>
                    <div style="margin-top:30px" class="col-sm-6 col-md-4 col-lg-3 item">
                        <a style="height: 300px;width300px" href="image/upload/<?php echo $r['image']?>"
                            data-lightbox="photos">
                            <img class="img-fluid" src="image/upload/<?php echo $r['image']?>">
                            <b><?php echo $r['title'] ?></b> <br>
                            <b><?php echo $r['price'] ?> (<b><?php echo $status ?></b>)</b>
                        </a>
                    </div>
                    <?php
                        }
                    }
                ?>


                </div>
            </div>
        </div>

    </div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<?php
    include_once "base/footer.php";
?>