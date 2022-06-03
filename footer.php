<section data-bs-version="5.1" class="footer3 cid-t7w3b7cDMw" once="footers" id="footer3-q">





    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="index.php" target="_blank">Home </a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="artists.php" target="_blank">Artists</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="painting.php" target="_blank">Painting</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="contact.php" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">




                <?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $icon = "";
            if($r['name'] == "facebook"){
                ?>


                    <!-- <div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                   
                    <div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div> -->
                    
                    
                </div>
                <?php
        }
    }
}
?>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2022 Power By Apex Myanmar Web Service
                </p>
            </div>
        </div>
    </div>
</section>
<section class="display-7"
    style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;background-color: black;margin-top: -20px;">
    <a href="#"><a href="https://mobiri.se/2783368"
            style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"></p><a style="z-index:1"
                href="https://mobirise.com/website-design-software.html"></a></a></section>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/ytplayer/index.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/theme/js/script.js"></script>
</body>

</html>