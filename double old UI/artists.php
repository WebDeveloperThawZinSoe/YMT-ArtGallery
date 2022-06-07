
  <?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>

<section data-bs-version="5.1" class="team2 cid-t7w48wCL46" xmlns="http://www.w3.org/1999/html" id="team2-11" style="background-color:gray !important">
    

    
    
    <div class="container" >
        <?php
            $sql = "SELECT * FROM artist ORDER BY id DESC";
            $result = mysqli_query($database_connection,$sql);
            if(mysqli_num_rows($result)>0){
                foreach($result as $r){
                    ?>
<div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="image/upload/<?php echo $r['image'] ?>" alt="Mobirise Website Builder">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <h5 class="card-title mbr-fonts-style m-0 mb-3 display-5">
                                <strong><?php echo $r['name'] ?></strong>
                            </h5>
                            <!-- <h6 class="card-subtitle mbr-fonts-style mb-3 display-4">
                                <strong>Programmer</strong>
                            </h6> -->
                            <p class="mbr-text mbr-fonts-style display-7" style="text-align: justify;text-indent: 40px;">
                              <?php
                                echo $r['bio'];
                              ?>
                            </p>
                            <form action="artists_detail.php" method="post" enctype="multipart/form">
                                <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                <input class="btn btn-primary" type="submit" name="detail" value="View Art">
                            </form>
                            <!-- <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="https://www.facebook.com/Mobirise/" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://instagram.com/mobirise" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php
                }
            }
        ?>
        
    </div>
    
</section>



    <?php
    include "footer.php";
  ?>