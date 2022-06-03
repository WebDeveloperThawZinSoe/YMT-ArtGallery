
  <?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>

<section data-bs-version="5.1" class="header2 cid-t7bKEOzgZ5 mbr-fullscreen mbr-parallax-background" id="header2-1">

    

    
    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(255, 255, 255);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong></strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7"></p>
                <div class="mbr-section-btn mt-3">
                    <!-- <a class="btn btn-success display-4" href="https://mobiri.se">Free Download!</a>
                    <a class="btn btn-success-outline display-4" href="https://mobiri.se">Live Demos &gt;</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section data-bs-version="5.1" class="slider2 cid-t7bKITKObF" id="slider2-3">
    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="carousel slide" id="t7w4Qb2ie9" data-interval="5000" data-bs-interval="5000">
                    
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#t7w4Qb2ie9" data-bs-target="#t7w4Qb2ie9"></li>
                        <li data-slide-to="1" data-bs-slide-to="1" data-target="#t7w4Qb2ie9" data-bs-target="#t7w4Qb2ie9"></li>
                        <li data-slide-to="2" data-bs-slide-to="2" data-target="#t7w4Qb2ie9" data-bs-target="#t7w4Qb2ie9"></li>
                    </ol>
                   
                    <?php
                        // $sql = "SELECT * FROM posts  ORDER BY id DESC LIMIT 1";
                        // $result = mysqli_query($database_connection,$sql);
                        // foreach($result as $row){
                            ?>
                    <div class="carousel-inner">
                        
                        <div class="carousel-item slider-image item active">
                            <div class="item-wrapper">
                                <img class="d-block w-100" src="image/upload/<?php echo $row['image']?>" alt="Mobirise Website Builder">
                                <div class="carousel-caption d-none d-md-block">
                                   
                                    <p class="mbr-section-text mbr-fonts-style display-7">
                                    <?php echo $row['title']?></p>
                                </div>
                            </div>
                        </div>
                            <?php
                        // }
                    ?>

                        <!-- <div class="carousel-item slider-image item">
                            <div class="item-wrapper">
                                <img class="d-block w-100" src="assets/images/background5.jpg" alt="Mobirise Website Builder">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                                        <strong>Fixed-Height Slider</strong>
                                    </h5>
                                    <p class="mbr-section-text mbr-fonts-style display-7">
                                        Click on the image to edit slides.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider-image item">
                            <div class="item-wrapper">
                                <img class="d-block w-100" src="assets/images/background8.jpg" alt="Mobirise Website Builder">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                                        <strong>Fixed-Height Slider</strong>
                                    </h5>
                                    <p class="mbr-section-text mbr-fonts-style display-7">
                                        Click on the image to edit slides.</p>
                                </div>
                            </div>
                        </div> -->
                                 

                    <!--</div>
                    <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#t7w4Qb2ie9">
                        <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control carousel-control-next" role="button" data-slide="next" data-bs-slide="next" href="#t7w4Qb2ie9">
                        <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->


  <?php
    include "footer.php";
  ?>