<header id="masthead" class="site-header group" role="banner" itemscope="itemscope"
    itemtype="http://schema.org/Organization">
    <div class="site-logo">
        <div itemprop="name">
            <a itemprop="url" href="http://ymt-artgallery.com">
                YMT Art Gallery </a>
        </div>
        <p class="tagline"></p>
    </div>
    <div class="site-bar">
        <nav class="nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            <ul id="menu-main" class="navigation">
              
                <li id="menu-item-440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-440">
                    <a href="index.php">Home</a>
                </li>
                <li id="menu-item-440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-440">
                    <a href="painting.php">Myint Naing</a>
                </li>
                <li id="menu-item-447"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-447">
                    <a href="#">Artists</a>
                    <ul class="sub-menu">
                        <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                        <li id="menu-item-436"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-436">
                            <a href="artists_detail.php?id=<?php echo $r['id'] ?>"><?php echo $r['name'] ?></a>

                            </form>
                        </li>

                        <?php
                        }
                    }
                ?>
                        <li id="menu-item-436"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-436">
                            <a href="artists.php">View All Artists</a>

                            </form>
                        </li>
                    </ul>
                </li>
                <li id="menu-item-440" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-440">
                    <a href="painting.php">Painting</a>
                </li>

                <li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439">
                    <a href="contact.php">Contact</a>
                </li>

            </ul><a class="mobile-nav-trigger" href="#mobilemenu"><i class="olsen-icons olsen-icons-bars"></i> Menu</a>
        </nav>
        <div id="mobilemenu"></div>
        <div class="site-tools has-search">
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
</header>