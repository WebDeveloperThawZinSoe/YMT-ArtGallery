
  <?php
    include "head.php";
  ?>

<?php
    include "nav.php";
?>

<style>
    .cid-t7bKEOzgZ5{

    }
</style>

<section data-bs-version="5.1" class="header2 cid-t7bKEOzgZ5 mbr-fullscreen mbr-parallax-background" id="header2-1">

    

    
    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(255, 255, 255);"></div>

    <?php
        $sql = "SELECT * FROM home_page";
        $result = mysqli_query($database_connection,$sql);
        $count = mysqli_num_rows($result);
       
            foreach($result as $result){
                if($result['status'] == "on"){
            ?>
 <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 style="padding-top: 20px;padding-bottom: 20px;padding-left: 10px;padding-right: 10px;font-size: <?php echo $result['title_size'] ?>px;color:<?php echo $result['title_color']?>;background-color: <?php echo $result['bg_color'] ?>;margin-bottom: 0px;border-radius: 4px 4px 0px 0px;"><?php echo $result['title']?></h1>
                
                <p style="padding-top: 20px;padding-bottom: 20px;padding-left: 10px;padding-right: 10px;font-size: <?php echo $result['text_size'] ?>px;color:<?php echo $result['text_color']?>;background-color: <?php echo $result['text_bg_color'] ?>"><?php echo $result['text']?>
                
                <br> <br>
                <a href="<?php echo $result['button_link'] ?>" style="color:<?php echo $result['button_color']?> ;background-color: <?php echo $result['button_bg_color']; ?>;border-radius: 0px 0px; 4px 4px " class="btn btn-primary"><?php echo $result['button_text']?></a>
            
                </p>

            </div>
        </div>
    </div>
            <?php
            }
        }
    ?>
   
</section>


  <?php
    include "footer.php";
  ?>