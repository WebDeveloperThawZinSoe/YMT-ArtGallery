<?php
    include_once "base/head.php";
    include_once "base/nav.php";
?>
<style>
* {
    box-sizing: border-box
}

/* Slideshow container */
.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active,
.dot:hover {
    background-color: #717171;
}

/* Fading animation */
.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}


</style>
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
    <div class="row">
        <div class="col-md-4 col-sm-12 ">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action "
                    style="background-color:#eb5844 ;color:white"> Artits </a>
                <?php
                    $sql = "SELECT id,name FROM artist ORDER BY id DESC";
                    $result = mysqli_query($database_connection, $sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                <a href="artist-details.php?id='<?php echo $r['id'] ?>'"
                    class="list-group-item list-group-item-action"><?php echo $r['name']; ?></a>
                <?php
                        }
                    }
                ?>

                <a href="artists.php" class="list-group-item list-group-item-action "
                    style="background-color:#eb5844 ;color:white"> View All Artits </a>


            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <!-- Slideshow container -->
            <div class="slideshow-container" style="margin-top:40px">

                <!-- Full-width images with number and caption text -->
                <?php
                    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
                    $result = mysqli_query($database_connection,$sql);
                    if($result){
                        foreach($result as $r){
                            ?>
                <div class="mySlides fade">
                    <div class="numbertext"> </div>
                    <img src="image/upload/<?php echo $r['image'] ?>" style="width:100%;height:500px">
                    <div class="text"><?php echo $r['title'] ?></div>
                </div>
                <?php
                        }
                    }
                ?>




                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>
    <br>
    
</div>
<br>
<!-- <div class="container">
    <h2 style="text-decoration: underline;">  Pictures </h2>
    <div class="container">
<h1>Photo/Gallery</h1>
<hr>
	<div class="row">
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1494719019271-7bfff81660d2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74496a215491b1529d6702f146901970&auto=format&fit=crop&w=500&q=60"> </a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523357585206-175e971f2ad9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4d4e050da1c691f01f0643abe9cd5f94&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6 ">
			<div class="thumbnail">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523359366921-4c14294ff5bd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6010b5b8bc1f6916d652fb48b9e039a6&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523282310917-57c94215f54f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9562049492c4c1c28014be6b4d372fa8&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523279719030-9806e8392152?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83ec2854d04d0f08312dec44bf645e2d&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523264629844-40dd6bf17c2b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c7ff0286ae72f4dfed2bfee5fc8a53fe&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523133892278-d324fa6b326b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1ba6e3178a138e7dcbdd241499378449&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523326350151-473dc3e5215b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aa765415933dbcd55bc27e0726bfd1f5&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail img-responsive">
				<a href="#" title="Image 1"><img src="https://images.unsplash.com/photo-1523086686757-5cda47c78492?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0da31c54dc3e5fd28da519b2cde2c98d&auto=format&fit=crop&w=500&q=60"></a>
			</div>
		</div>
	</div>
</div>
<div id="modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div> -->
</div>
<script>
    $('.thumbnail').click(function(){
	$('.modal-body').empty();
	$($(this).parents('div').html()).appendTo('.modal-body');
	$('#modal').modal({show:true});
});

$('#modal').on('show.bs.modal', function () {
   $('.col-6,.row .thumbnail').addClass('blur');
})

$('#modal').on('hide.bs.modal', function () {
   $('.col-6,.row .thumbnail').removeClass('blur');
})
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php
    include_once "base/footer.php";
?>