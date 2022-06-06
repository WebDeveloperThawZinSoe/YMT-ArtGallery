<?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>

<section data-bs-version="5.1" class="gallery2 cid-t7w2E2zmxP" id="gallery2-m"
    style="background-color: gray !important;">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"
                style="font-size:28px;font-weight: bolder;">My Gallery</h4>

        </div>
        <div class="row mt-4">
            <?php
                                    $sql = "SELECT * FROM posts ORDER BY id DESC ";
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
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="image/upload/<?php echo $r['image'] ?>">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5" style="font-size:20px">
                            <?php echo $r['title'] ?></h5>


                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="#myModal<?php echo $r['id'] ?>" class="btn btn-primary item-btn display-7"
                            target="_blank" data-bs-toggle="modal" style="font-size:20px !important">View </a>
                    </div>
                </div>
            </div>

            <!-- Modal HTML -->
            <div id="myModal<?php echo $r['id'] ?>" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo $r['title'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <img src="image/upload/<?php echo $r['image'] ?>" class="img-responsive" alt="">
                            <p><?php echo $r['description'] ?></p>
                            <p class=""><b><?php echo $r['price'] ?> MMKS</b>
                                <?php
                            $status = $r['status'];
                            if($status == 0){

                                ?>
                            <p style="color: green;"> For Sell </p>

                            <?php

                            }else if($status == 1){
                                ?>
                            <p style="color: red;"> Sold Out </p>
                            <?php
                            }
                        ?>
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
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
    include "footer.php";
  ?>