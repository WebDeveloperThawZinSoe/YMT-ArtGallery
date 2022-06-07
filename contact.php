<?php
    include "head.php";
?>

<?php
    if(isset($_POST["submit"])){
       $name = htmlspecialchars($_POST["name"]);
       $phone =  htmlspecialchars($_POST["phone"]);
       $address = htmlspecialchars($_POST["message"]);
       $now = date('Y-m-d H:i:s');
       $sql = "INSERT INTO contact (title,phone,message,create_date) VALUES ('$name','$phone','$address','$now')";
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

<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                include "nav.php";
            ?>

                <div class="col-12">
                    <article id="entry-269" class="entry post-269 page type-page status-publish hentry"
                        itemscope="itemscope" itemprop="blogPost">
                        
                        <div class="row justify-content-center mt-4">

                        <br> <br>

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
                                            <a href="tel:+9509791946212" class="text-primary">09791946212</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                                            <a href="mailto:ymtartgallery@gmail.com"
                                                class="text-primary">ymtartgallery@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                                            9/689 East Dagon Yangon </p>
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
                                        <p class="mbr-text mbr-fonts-style display-7"> 9:00 AM to 5:00 PM
                                        </p>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        <div class="entry-content">
                            <!-- <p>Wes Anderson banjo you probably haven’t heard of them cred, XOXO deep v kale chips
                                Kickstarter viral. Swag meggings jean shorts chillwave seitan disrupt. Meditation
                                flexitarian authentic organic, you probably haven’t heard of them taxidermy fap pop-up.
                                Trust fund Tumblr Schlitz Banksy Austin squid.</p> -->
                            <div class="wp-block-contact-form-7-contact-form-selector">
                                <div role="form" class="wpcf7" id="wpcf7-f682-p269-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="" method="post" class="wpcf7-form init" novalidate="novalidate"
                                        data-status="init">

                                        <p><label> Your name<br> <span class="wpcf7-form-control-wrap your-name"><input
                                                        type="text" name="name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"></span> </label></p>

                                        <p><label> Your Phone<br> <span class="wpcf7-form-control-wrap your-name"><input
                                                        type="text" name="phone" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false"></span> </label></p>

                                        <p><label> Your message <br> <span
                                                    class="wpcf7-form-control-wrap your-message"><textarea
                                                        name="message" cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea"
                                                        aria-invalid="false"></textarea></span> </label></p>
                                        <p><input type="submit" name="submit" value="Submit"
                                                class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                class="wpcf7-spinner"></span></p>

                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7816435086047!2d96.20156361436634!3d16.886692821497853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193fbf369bd69%3A0x14d8bc571b3c87b4!2sApex%20Myanmar%20Web%20Service!5e0!3m2!1sen!2smm!4v1654619849140!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <div class="entry-utils group">
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/sharer.php?u=https://www.cssigniter.com/demos/olsen-light/contact/"
                                        target="_blank" rel="noopener" class="social-icon"><i
                                            class="olsen-icons olsen-icons-facebook"></i></a></li>
                                <li><a href="https://twitter.com/share?url=https://www.cssigniter.com/demos/olsen-light/contact/"
                                        target="_blank" rel="noopener" class="social-icon"><i
                                            class="olsen-icons olsen-icons-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.cssigniter.com%2Fdemos%2Folsen-light%2Fcontact%2F"
                                        target="_blank" rel="noopener" class="social-icon"><i
                                            class="olsen-icons olsen-icons-linkedin"></i></a></li>
                            </ul>
                        </div> -->
                    </article>
                </div>

                <?php
                    include "nav_footer.php";
                ?>

            </div>
        </div>
    </div>
</div>
<div class="navigation-mobile-wrap"><a href="#nav-dismiss" class="navigation-mobile-dismiss">Close Menu</a>
    <ul class="navigation-mobile"></ul>
</div>

<?php
    include 'footer.php';
?>