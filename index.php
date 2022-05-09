<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>

<!-- Section One -->
<div style="background-image: url('image/img-1.jpg');background-position: center;background-attachment: fixed;background-size: cover;height:340px"
    class="jumbotron text-left " style="background-color: white;">
    <div class="container">
        <h1 style="text-transform: uppercase;"> <span style="color:white;">Welcome From YMT</span> <span
                class="secondary-text">Art Gallery</span></h1>
        <p style="color:white;"> <b> Resize this responsive page to see the effect!</b> </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 ">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action " style="background-color:#eb5844 ;color:white"> Artits </a> 
                <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                                <a href="artist-details.php?id='<?php echo $r['id'] ?>'" class="list-group-item list-group-item-action"><?php echo $r['name']; ?></a>
                            <?php
                        }
                    }
                ?>
               
              
            </div>
        </div>
        <div class="col-sm-4">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>

<?php
    include_once "base/footer.php";
?>