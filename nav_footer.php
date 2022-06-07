<footer id="footer">
    <div class="row">
        <div class="col-12">
            <div class="footer-widget-area" data-auto="1" data-speed="1750">
                <aside id="block-6" class="widget group widget_block">
                    <p>
                    <!-- <div class="ignition-demo-instagram ignition-instagram-wrapper ignition-instagram-carousel"
                        data-auto="1" data-auto-speed="3000" data-speed="1000" data-slides="8" data-arrows="0">
                        <ul class="ignition-instagram-list">
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalYjBMuuP/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion01.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalWfXML5T/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion02.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalRt_MNj1/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion03.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalOhLsSpH/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion04.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalKZDsjpZ/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion05.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalE0OMzNB/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion06.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalCVpsAlE/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion07.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCalAF5sPbp/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion08.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCak89tMOFD/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion09.jpg);"
                                    target="_blank"></a></li>
                            <li class="ignition-instagram-list-item"><a href="https://www.instagram.com/p/CCak4EZM5UG/"
                                    style="background-image: url(wp-content/plugins/ci-demos-instagram/assets/images/fashion/fashion10.jpg);"
                                    target="_blank"></a></li>
                        </ul>
                    </div> -->
                    </p>
                </aside>
            </div>
        </div>
    </div>
    <div class="site-bar">
        <nav class="nav">
            <ul id="menu-footer" class="navigation">
                <li id="menu-item-460"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-460">
                    <a href="index.php">Home</a>
                </li>
                <li id="menu-item-461"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-461">
                    <a href="artists.php">Artists</a>
                </li>
                <li id="menu-item-462"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-462">
                    <a href="painting.php">Painting</a>
                </li>
                <li id="menu-item-463"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-462">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="site-tools">
            <ul class="socials">
            <?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $icon = "";
            if($r['name'] == "facebook"){
                ?>

                <li><a href="<?php echo $r['link'] ?>" target="_blank" rel="noopener"><i
                            class="olsen-icons olsen-icons-facebook"></i></a></li>


                <?php
            }
            if($r['name'] == "instergram"){
                ?>
                <li>
                <a href="<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"><i
                        class="olsen-icons olsen-icons-instagram"></i></a></li>
                <?php
            }
            if($r['name'] == "phone"){
                ?>
                <li>
                <a href="tel:+95<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"><i
                        class="olsen-icons olsen-icons-mobile"></i></a></li>
                <?php
            }
            if($r['name'] == "email"){
                ?>
                <li>
                <a href="mailto:<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"><i
                        class="olsen-icons olsen-icons-envelope"></i></a></li>
                <?php
            }
            ?>

            
<?php
        }
    }
?>


            </ul>
        </div>
    </div>
    <div class="site-logo">

        <p class="tagline"><a href="#" title="Blogging theme for WordPress">Powered By Apex Myanmar Web Service</a> </p>
    </div>
</footer>