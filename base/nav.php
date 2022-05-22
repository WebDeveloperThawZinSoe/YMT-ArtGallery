<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
        <?php 
                                $sql = "SELECT name FROM logo "; 
                                $result = mysqli_query($database_connection,$sql);
                                if($result){
                                    foreach($result as $r){
                                        ?>
                                
                                <img class="rounded-circle" style="width:100px;height:100px" src="image/upload/<?php echo $r['name'] ?>" class="img-responsive" alt=""> YMT<b class="at-sm">ArtGallery</b></a> 
                                        <?php
                                    }
                                }
                                ?>
       
           <!-- <img class="rounded-circle" style="width:100px;height:100px" src="image/logo.jpg" class="img-responsive" alt=""> YMT<b class="at-sm">ArtGallery</b></a> -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="painting.php" class="nav-item nav-link">Myint Naing</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown">Artits</a>
                    <div class="dropdown-menu">
                    <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                                <form action="artist-details.php" method="post" >
                                    <input type="hidden" name="id" value="<?php echo $r['id'] ?>" >
                                    <input  class="dropdown-item" type="submit" name="detail" value="<?php echo $r['name'] ?>">
                                </form>
                            <?php
                        }
                    }
                ?>

                <hr>

                <a class="dropdown-item" href="artists.php" class="list-group-item list-group-item-action">View All Artists</a>
                     
                    </div>
                </div>
                <a href="painting.php" class="nav-item nav-link">Painting</a>
             
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="navbar-form-wrapper">
                    <!-- <form class="navbar-form form-inline">
                        <div class="input-group search-box">
                            <input type="text" id="search" class="form-control" placeholder="Search Here...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="material-icons">&#xE8B6;</i>
                                </span>
                            </div>
                        </div>
                    </form> -->
                </div>
<?php
    $sql = "SELECT * FROM media";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $icon = "";
            if($r['name'] == "facebook"){
                ?>
 <a href="<?php echo $r['link'] ?>" target="_blank"
                    class="nav-item nav-link"><i class="fa fa-facebook"></i></a>
                <?php
            }
            if($r['name'] == "instergram"){
                ?>
<a href="<?php echo $r['link'] ?>" target="_blank"
                    class="nav-item nav-link"><i class="fa fa-instagram"></i></a>
                <?php
            }
            if($r['name'] == "phone"){
                ?>
 <a href="tel:+95<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"><i class="fa fa-phone"></i></a>
                <?php
            }
            if($r['name'] == "email"){
                ?>
  <a href="mailto:<?php echo $r['link'] ?>" target="_blank" class="nav-item nav-link"><i
                        class="fa fa-envelope"></i></a>
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