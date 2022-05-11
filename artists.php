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
        <p style="color:white;"> <b> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum distinctio
                ipsum ab, vero expedita non esse temporibus beatae nisi aspernatur quas illo culpa porro tempora ullam
                voluptates natus cumque dolore?</b> </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
                    $sql = "SELECT id,name,image FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
         <div class="col-md-4" style="margin-top:30px">
            <div class="card">
                <img class="card-img-top" src="image/upload/<?php echo $r['image'] ?>" style="height:400px" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $r['name'] ?></h4>
                  
                    <a href="#" class="btn btn-primary btn-block">View Detail</a>
                </div>
            </div>
        </div>
       
        <?php
                        }
                    }
                ?>

       
    </div>
</div>

<?php
    include_once "base/footer.php";
?>