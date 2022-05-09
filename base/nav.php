<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">YMT<b>ArtGallery</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown">Artits</a>
                    <div class="dropdown-menu">
                    <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                                <a class="dropdown-item" href="artist-details.php?id='<?php echo $r['id'] ?>'" class="list-group-item list-group-item-action"><?php echo $r['name']; ?></a>
                            <?php
                        }
                    }
                ?>
                     
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">Portfolio</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="navbar-form-wrapper">
                    <form class="navbar-form form-inline">
                        <div class="input-group search-box">
                            <input type="text" id="search" class="form-control" placeholder="Search Here...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="material-icons">&#xE8B6;</i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="https://www.facebook.com/yemyat.amz
" target="_blank" class="nav-item nav-link"> <i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/p/CdQsoM5vCrb/?igshid=YmMyMTA2M2Y=" target="_blank"
                    class="nav-item nav-link"><i class="fa fa-instagram"></i></a>
                <a href="mailto:ymtartgallery@gmail.com" target="_blank" class="nav-item nav-link"><i
                        class="fa fa-envelope"></i></a>
                <a href="tel:+959403077739" target="_blank" class="nav-item nav-link"><i class="fa fa-phone"></i></a>

            </div>
        </div>
    </div>

</nav>