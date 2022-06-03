<section data-bs-version="5.1" class="menu menu3 cid-t7bKvNaufH" once="menu" id="menu3-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/78-logo-old.jpg" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7"
                        href="index.php">YMT-Art Gallery</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php" id="nav-style">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="painting.php" id="nav-style">Myint
                            Naing</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-4"
                            href="artists.php" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false" id="nav-style">Artists</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-343">
                        <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                        <form   action="artist-details.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                            <input  class="dropdown-item text-white " type="submit" id="nav-style" name="detail" style=":hover" value="<?php echo $r['name'] ?>">
                        </form>

<?php
                        }
                    }
?>
                            <a class="dropdown-item text-white " href="artists.php" id="nav-style">View All Artists</a>
                        </form> 
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link link show text-white display-4"
                            href="painting.php" id="nav-style">Painting</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="contact.php" id="nav-style" >Contacts</a>
                    </li>
                </ul>
                <div class="icons-menu">
                    <?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $icon = "";
            if($r['name'] == "facebook"){
                ?>
                    <a class="iconfont-wrapper" href="<?php echo $r['link'] ?>" target="_blank" > <span class="fa fa-facebook"></span>
                    <?php
            }
            if($r['name'] == "instergram"){
                ?>
                    <a class="iconfont-wrapper" href="<?php echo $r['link'] ?>" target="_blank" > <span class="p-2 mbr-iconfont socicon-instagram socicon"></span></a>
                    <?php
            }
            if($r['name'] == "phone"){
                ?>
                    <a class="iconfont-wrapper" href="tel:+95<?php echo $r['link'] ?>" target="_blank" > <span class=" fa fa-phone"></span></a>
                    <?php
            }
            if($r['name'] == "email"){
                ?>
                    <a class="iconfont-wrapper" href="mailto:<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"> <span class=" fa fa-envelope "></span></a>
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
    </nav>
</section>