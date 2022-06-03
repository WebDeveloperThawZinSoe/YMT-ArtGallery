<?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>
<?php
    if(isset($_POST["submit"])){
       $name = htmlspecialchars($_POST["name"]);
       $phone =  htmlspecialchars($_POST["phone"]);
       $message = htmlspecialchars($_POST["message"]);
       $now = date('Y-m-d H:i:s');
       $sql = "INSERT INTO contact (title,phone,message,create_date) VALUES ('$name','$phone','$message','$now')";
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
<?php
        $sql  = "SELECT * FROM contact_page ";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            foreach($result as $r){
                $image = $r['image'];
?>
<section data-bs-version="5.1" class="header2 cid-t7bNn4S3KO mbr-fullscreen mbr-parallax-background" id="header2-a">




    <div class="mbr-overlay" style="opacity: 0.8; background-image: url('image/upload/<?php echo $image?>');background-repeat: no-repeat;background-size: cover;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 "><strong><?php echo $r['main_text'] ?></strong></h1>
                <h3>--- <?php echo $r['secondary_text'] ?> ---</h3>
                <p class="mbr-text mbr-fonts-style display-7"><?php echo $r['content_text'] ?></p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts2 cid-t7bNv6lOnP" id="contacts2-c">
    <!---->




    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contacts</strong>
            </h3>

        </div>
        <div class="row justify-content-center mt-4">
            <?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $rr){
            $icon = "";
            if($rr['name'] == "phone"){
                ?>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:+95<?php echo $rr['link'] ?>" class="text-primary"><?php echo $rr['link'] ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            if($rr['name'] == "email"){
                ?>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:<?php echo $rr['link'] ?>" class="text-primary"><?php echo $rr['link'] ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
          
            ?>




            <?php
        }
    }
?>



            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php
                                echo $r['map'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php
                                echo $r['working_hr'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-t7bUAjDMbW" id="form5-l">


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contacts</strong>
            </h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler"
                    data-form-title="Form Name">
                    
                    <div class="dragArea row">
                        <div class="col-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name"
                                class="form-control" value="" id="name-form5-l" required>
                        </div>
                        <div class="col-12 col-sm-12 form-group mb-3" data-for="phone">
                            <input type="number" name="phone" placeholder="Phone" data-form-field="phone"
                                class="form-control" value="" id="phone-form5-l" required>
                        </div>
                      
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="message" placeholder="Message" data-form-field="textarea"
                                class="form-control" id="textarea-form5-l"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button name="submit" type="submit" class="btn btn-primary display-4">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="share3 cid-t7w2ViNefn" id="share3-n">






    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-2">
                    <strong>Follow Us!</strong>
                </h3>
                <div class="social-list align-center">
                <?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $icon = "";
            if($r['name'] == "facebook"){
                ?>
                 <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="<?php echo $r['link'] ?>">
                        <span class="socicon-facebook socicon"></span>
                    </a>
                   
                    <?php
            }
            if($r['name'] == "instergram"){
                ?>
                 <a class="iconfont-wrapper bg-facebook m-2" href="<?php echo $r['link'] ?>" target="_blank">
                        <span class="socicon-instagram socicon"></span>
                    </a>
           
                    <?php
            }
            if($r['name'] == "phone"){
                ?>
                    <a class="iconfont-wrapper bg-facebook m-2" href="tel:+95<?php echo $r['link'] ?>" target="_blank" > <span class=" socicon-viber socicon"></span></a>
                    <?php
            }
            if($r['name'] == "email"){
                ?>
                    <a class="iconfont-wrapper bg-facebook m-2" href="mailto:<?php echo $r['link'] ?>" target="_blank" > <span class="socicon-mail socicon"></span></a>
                    <?php
            }
            
            ?>




                    <?php
        }
    }
?>
                   
                   
                    








                </div>
            </div>
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