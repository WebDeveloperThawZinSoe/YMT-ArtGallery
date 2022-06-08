<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {
    opacity: 0.7;
}

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content,
#caption {
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px) {
    .modal-content {
        width: 100%;
    }
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
                    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 9";
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
                    <div class="col-md-4">


                        <!-- Trigger the Modal -->
                        <img id="<?php echo $r["id"] ?>" src="image/upload/<?php echo $r["image"] ?>" alt="Snow"
                            style="width:100%;height:100%;padding-top:10px">
                         

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img src="image/upload/<?php echo $r["image"] ?>" class="modal-content"
                                id="<?php echo $r["id"] ?>">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption">
                                <?php echo $r['title']  ?>
                                <p> ( <b style="color:green"> <?php echo $r['price'] ?></b> MMKS )</p>
                            </div>
                        </div>
                    </div>

                    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById("<?php echo $r['id'] ?>");
                    var modalImg = document.getElementById("image/upload/<?php echo $r['image'] ?>");
                    var captionText = document.getElementById("caption");
                    img.onclick = function() {
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    </script>
                    <?php
                        }
                    }
                ?>


                </div>
            </div>
            <br>
            <center>  <a target="_blank" href="all_painting.php" class="btn  text-center  " style="background-color: #eb5844;color:white"  data-placement>View All Arts</a></center>
          
        </div>

    </div>

</div>
</div>


<?php
    include_once "base/footer.php";
?>