<?php
    include "head.php";
?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                include "nav.php";
                ?>

                <main id="content" class="entries-grid" role="main" itemprop="mainContentOfPage" itemscope="itemscope"
                    itemtype="http://schema.org/Blog">
                    <div class="row">
                        <div id="inner-content" class="col-12">
                            <div class="row">
                                <?php
                                    $id = $_GET["id"];
                                    $sql = "SELECT * FROM artist WHERE id = '$id'";
                                    $result = mysqli_query($database_connection,$sql);
                                    foreach($result as $r){
                                        ?>
                                <div class="col-12">
                                    <article id="entry-233"
                                        class="entry post-233 post type-post status-publish format-image has-post-thumbnail hentry category-looks tag-autumn tag-dress tag-photography post_format-post-format-image"
                                        itemscope="itemscope" itemtype="http://schema.org/BlogPosting"
                                        itemprop="blogPost">

                                        <h2 class="entry-title" itemprop="headline"><?php echo $r['name'] ?></h2>
                                        <div class="entry-meta entry-meta-bottom"></div>
                                        <div class="entry-featured"><a href="#"><img width="720" height="471"
                                                    src="image/upload/<?php echo $r['image'] ?>"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="" itemprop="image"></a></div>
                                        <div class="entry-content" itemprop="text">
                                            <p><?php echo $r['bio'] ?>.</p>
                                        </div>
                                        <div class="entry-utils group"><a
                                                href="artists_detail.php?id=<?php echo $r['id'] ?>"
                                                class="read-more">View Detail</a>

                                        </div>
                                    </article>
                                </div>
                                <?php
                                    }
                                ?>


                            </div>

                            <div class="row">

                                <?php
                                $id = $_GET["id"];
$sql = "SELECT * FROM posts WHERE id=$id ";
$result = mysqli_query($database_connection,$sql);
if($result){
foreach($result as $r){
$status = $r['status'];

if($status == 0){
$status = "For Sale";
}else if($status == 1){
$status = "Sold Out";
}
?>
                                <div class="col-md-6">
                                    <article id="entry-256"
                                        class="entry entry-grid post-256 post type-post status-publish format-gallery has-post-thumbnail hentry category-fashion tag-autumn tag-dress tag-photography post_format-post-format-gallery"
                                        itemscope="itemscope" itemtype="" itemprop="blogPost">

                                        <div class="entry-featured"><a href="#"><img width="720" height="471"
                                                    src="image/upload/<?php echo $r['image'] ?>"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="" loading="lazy" itemprop="image"></a></div>
                                        <div class="entry-content" itemprop="text">
                                            <h3><?php echo $r['title'] ?></h3>
                                            <p><?php 
            $data = $r['description'];
            echo $data;
            ?></p>
                                        </div>
                                        <div class="entry-utils group"><a data-toggle="modal"
                                                data-target="#myModal<?php echo $r['id'] ?>" class="read-more">View
                                                Detail</a>

                                        </div>
                                    </article>
                                </div>



                                <?php
}
}
?>
                            </div>

                        </div>
                    </div>

                </main>

                <?php
                    include "nav_footer.php";
                ?>

            </div>
        </div>
    </div>
</div>
<div class="navigation-mobile-wrap"><a href="#nav-dismiss" class="navigation-mobile-dismiss">Close Menu</a>
    <ul class="navigation-mobile"></ul>
</div>

<?php
    include 'footer.php';
?>