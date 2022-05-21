<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>

<?php
    if(isset($_POST["submit"])){
       $name = htmlspecialchars($_POST["name"]);
       $phone =  htmlspecialchars($_POST["phone"]);
       $address = htmlspecialchars($_POST["address"]);
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
<?php
    $sql  = "SELECT * FROM contact_page ";
    $result = mysqli_query($database_connection,$sql);
    if($result){
        foreach($result as $r){
            $image = $r['image'];
            ?>
<!-- Section One -->
<div style="background-image: url('image/cover1.jpg');background-position: center;background-attachment: fixed;background-size: cover;height:500px"
    class="jumbotron text-left " style="background-color: white;">
    <div class="container">
        <h1 style="text-transform: uppercase;"> <span style="color:white;">Welcome From YMT</span> <span
                class="secondary-text">Art Gallery</span></h1>
        <p style="color:white;"> <b> Resize this responsive page to see the effect!</b> </p>
    </div>
</div>

<div class="container">
    <h3 class="text-center"
        style="padding-bottom: 40px;text-decoration: underline;height:1px;color:#eb5844  !important;margin-bottom: 20px;">
        Contact Me</h3>
    <div class="row">

        <div class="col-md-6">
            <form action="" method="post" style="padding-bottom: 30px;">
                <div class="input-group  ">
                    <input required name="name" id="field_name" type="text" class="form-control  "
                        placeholder="Enter Your Name Here ...">

                </div>
                <br>


                <div class="input-group   ">
                    <input required name="phone" id="field_data" type="number" id="field_phone" class="form-control  "
                        placeholder="Enter Your Phone Number Here ...">
                    <span id="phone"></span>
                </div>
                <br>

                <div class="input-group  search-box ">
                    <textarea required name="address" id="field_data" type="address" id="field_address"
                        class="form-control  " rows="10" placeholder="Enter Your Address Here ..."></textarea>
                    <span id="address"></span>
                </div>
                <br>

                <input class="btn btn-default" style="background-color: #eb5844;color:white" type="submit" name="submit"
                    value="Send">
            </form>
        </div>


        <div class="col-md-6">

            <p>
               <?php echo $r['content_text'] ?>
            </p>
           
            <p>
                Phone : 09791946212 <br>
                Email : ymtartgallery@gmail.com <br>
                Address : <?php echo $r['map'] ?><br>
            </p>

            <p>


            <ul class="nav">
                <li class="nav-item">
                    <a href="https://www.facebook.com/yemyat.amz
" target="_blank" class="nav-item nav-link"> <i class="fa fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/p/CdQsoM5vCrb/?igshid=YmMyMTA2M2Y=" target="_blank"
                        class="nav-item nav-link"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="mailto:ymtartgallery@gmail.com" target="_blank" class="nav-item nav-link"><i
                            class="fa fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a href="tel:+959403077739" target="_blank" class="nav-item nav-link"><i
                            class="fa fa-phone"></i></a>
                </li>
            </ul>

            </p>

        </div>
        <div class="col-md-12">
          <?php
            echo $r['address'];
          ?>
        </div>
    </div>
</div>
<?php
        }
    }
?>

<!-- <script>
var field_name = document.getElementById("field_name");
var field_phone = document.getElementById("field_phone");
var field_address = document.getElementById("field_address");
var name_txt = document.getElementById("name_txt");
var phone = document.getElementById("phone");
var address = document.getElementById("address");
field_name.addEventListener("keydown", function() {
   var length = field_name.length;
   if(length <= 0){
    console.log(length);
    name_txt.innerHTML = "<span style='color:red'> Name is required , Please enter your name </span>" ;
   }else if(length <= 0){
       
   }

})
</script> -->
<?php
    include_once "base/footer.php";
?>