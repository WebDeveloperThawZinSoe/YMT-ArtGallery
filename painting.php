
  <?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>

<section data-bs-version="5.1" class="gallery2 cid-t7w2E2zmxP" id="gallery2-m" style="background-color: gray !important;">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>My Gallery</strong></h4>
            
        </div>
        <div class="row mt-4">
            <?php
                                    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 10";
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
                        <img src="image/upload/<?php echo $r['image'] ?>" >
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><?php echo $r['title'] ?></h5>
                        
                        
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="" class="btn btn-primary item-btn display-7" target="_blank">Detail</a>
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