<?php

    session_start();

    include_once "database.php";

    /* Password Encryption */
    function pwd_has($data){
       $data = md5($data);
       $data = sha1($data);
       $data = crypt($data,"This is Thaw ");
       return $data;
    }

    /* Image Filter */
    function image_filter($image,$location){
        $name = $image["name"];
        $size = $image["size"];
        $error = $image["error"];
        $tmp_name = $image["tmp_name"];
        $type = $image["type"];
        $image_upload_location = "../image/upload/";
        global $unique_file_name ;
        $unique_file_name = rand(0,100) . "_" . $name;
 
        if($error == 0){
             if($size < 2000000){
                 if($type == "image/png" || $type=="image/jpg" || $type =="image/jpeg" || $type == "image/gif"){
                    move_uploaded_file($tmp_name , $image_upload_location . $unique_file_name);
                    return $unique_file_name;
                 }else{
                     error_message("We only accept jpg png and gif",$location);
                     die();
                 }
             }else{
                 error_message("File is too big",$location);
                 die();
             }
        }else{
             error_message("File has error" , $location);
             die();
        }
 
     }


     function success_message($data,$location){
        $_SESSION["success"] = $data;
        header("location:$location");
    }

    /* Error message */
    function error_message($data,$location){
        $_SESSION["error"] = $data;
        header("location:$location");
        
    }

    /* Login */
    if(isset($_POST["login"])){
       $username = htmlspecialchars($_POST["username"]);
       $password = htmlspecialchars($_POST["password"]);
       $password = pwd_has($password);
       $sql = "SELECT id FROM account WHERE name = '$username' AND password = '$password'";
       $result = mysqli_query($database_connection, $sql);
       if(mysqli_num_rows($result) > 0){
            $_SESSION["success"] = "Account Login  Success";
            $_SESSION["user"] = $username;
            $_SESSION["password"] = $password;
            header("location:index.php");
       }else{
        header("location:index.php");
       }
    }

    /* Account Create */
    if(isset($_POST["account_create"])){
       $username = htmlspecialchars($_POST["username"]);
       $password = htmlspecialchars($_POST["password"]);
       $password = pwd_has($password);
       $sql = "SELECT id FROM account WHERE name = '$username' ";
       $result = mysqli_query($database_connection, $sql);
       $now = date('Y-m-d H:i:s');
       if(mysqli_num_rows($result) > 0){
           $_SESSION["error"] = "User Already Exist";
           header("location:account.php");
       }else{ 
           $sql = "INSERT INTO account(name,password,create_date) VALUES ('$username','$password','$now')";
           $result = mysqli_query($database_connection, $sql);
           if($result){
            $_SESSION["success"] = "Account Create  Success";
            header("location:account.php");
           }else{
            $_SESSION["error"] = "Account Create  Fail";
            header("location:account.php");
           }
       }
    }

    /* Account Delete */
    if(isset($_POST["account-delete"])){
        $id = $_POST["id"];
        $sql = "DELETE FROM account WHERE id=$id";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Account Delete  Success";
            header("location:account.php");
        }else{
            $_SESSION["error"] = "Account Delete  Fail";
            header("location:account.php");
        }
    }


    /* Create Artists */
    if(isset($_POST["artists_create"])){
       $username = htmlspecialchars($_POST["username"]);
       $bio = htmlspecialchars($_POST["bio"]);
       image_filter($_FILES["image"],"artists.php");
        # $unique_file_name;
        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO artist(name,image,bio,create_date) VALUES ('$username','$unique_file_name','$bio','$now')";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Artists Create  Success";
            header("location:artists.php");
        }else{ 
            $_SESSION["error"] = "Artists Create  Fail";
            header("location:artists.php");
        }
    }


    /* Delete Artists */
    if(isset($_POST["artists_delete"])){
       $id = $_POST["id"];
       $sql = "DELETE FROM artist WHERE id=$id";
       $result = mysqli_query($database_connection,$sql);
       $sql = "DELETE FROM posts WHERE artist_id=$id";
       $result2 = mysqli_query($database_connection,$sql);
       if($result && $result2){
           $_SESSION["success"] = "Artist Delete  Success";
           header("location:artists.php");
       }else{
           $_SESSION["error"] = "Artist Delete  Fail";
           header("location:artists.php");
       }
    }

    /* Upgrade Artists */
    if(isset($_POST["artists_upgrade"])){
        $id = $_POST["id"];
        $username = htmlspecialchars($_POST["username"]);
        $bio = htmlspecialchars($_POST["bio"]);
        image_filter($_FILES["image"],"artists.php");
        $sql ="UPDATE artist SET name='$username',image='$unique_file_name',bio='$bio' WHERE id=$id";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Artist Update  Success";
            header("location:artists.php");
        }
    }

    /* Create Post */
    if(isset($_POST["post_create"])){
        $title = htmlspecialchars($_POST['title']);
        $artists = htmlspecialchars($_POST['artists']);
        $price =  htmlspecialchars($_POST['price']);
        $status = htmlspecialchars($_POST['status']);
        $description = htmlspecialchars($_POST['description']);
        image_filter($_FILES["image"],"posts.php");
        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO posts(title,artist_id,image, description,price,status,create_date) VALUES ('$title','$artists','$unique_file_name','$description','$price','$status','$now')";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Post Create  Success";
            header("location:posts.php");
        }else{
            $_SESSION["error"] = "Post Create  Fail";
            header("location:posts.php");
        }
    }

    /* Delete Post */
    if(isset($_POST["post_delete"])){
        $id = $_POST["id"];
        $sql = "DELETE FROM  posts WHERE id=$id";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Post Delete  Success";
            header("location:see_posts.php");
        }else{
            $_SESSION["error"] = "Post Delete  Fail";
            header("location:see_posts.php");
        }
    }

    /* Update Post */
    if(isset($_POST["post_update"])){
        $id = htmlspecialchars($_POST["id"]);
        $title = htmlspecialchars($_POST['title']);
        $artists = htmlspecialchars($_POST['artists']);
        $price =  htmlspecialchars($_POST['price']);
        $status = htmlspecialchars($_POST['status']);
        $description = htmlspecialchars($_POST['description']);
        image_filter($_FILES["image"],"posts.php");
        $now = date('Y-m-d H:i:s');
        $sql = "UPDATE posts SET title='$title',artist_id='$artists',image='$unique_file_name',description='$description',price='$price',status='$status' WHERE id=$id";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Post Update  Success";
            header("location:see_posts.php");
        }else{
            $_SESSION["error"] = "Post Update  Fail";
            header("location:see_posts.php");
        }
    }
    /* Create Media */
    if(isset($_POST["media_create"])){
       $media = $_POST["media"];
       $link = $_POST["link"];
       $sql = "UPDATE media SET link='$link' WHERE name='$media'";
       $result = mysqli_query($database_connection, $sql);
       if($result){
            $_SESSION["success"] = "Link Update  Success";
            header("location:media.php");
       }else{
        $_SESSION["error"] = "Link Update  Fail";
        header("location:media.php");
       }
    }

    /* Update SEO */
    if(isset($_POST["seo_update"])){
      $description = htmlspecialchars($_POST["description"]);
      $keywords = htmlspecialchars($_POST["keywords"]);
      $author = htmlspecialchars($_POST["author"]);
      $sql = "UPDATE seo SET description='$description',keywords='$keywords',author='$author'";
      $result = mysqli_query($database_connection, $sql);
      if($result){
        $_SESSION["success"] = "SEO Update  Success";
        header("location:seo.php");
      }else{
        $_SESSION["error"] = "SEO Update  Fail";
        header("location:seo.php");
      }
    }

    /* Contact Page Setting */
    if(isset($_POST["contact_page_update"])){
       $main = htmlspecialchars($_POST["main"]);
       $secondary = htmlspecialchars($_POST["secondary"]);
       $content_text = htmlspecialchars($_POST["content-text"]);
       $map = htmlspecialchars($_POST["map"]);
       $address = ($_POST["address"]);
       image_filter($_FILES["image"],"contact-page.php");
       $sql = "UPDATE contact_page SET main_text='$main',secondary_text='$secondary',image='$unique_file_name',content_text='$content_text',map='$map',address='$address' ";
       $result = mysqli_query($database_connection,$sql);
       if($result){
        $_SESSION["success"] = "Page Setting Update  Success";
        header("location:contact-page.php");
       }
    }

    /* change-logo */
    if(isset($_POST["change-logo"])){
        image_filter( $_FILES["logo"],"index.php");
        $sql = "UPDATE logo SET name='$unique_file_name' ";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Logo Update  Success";
            header("location:overall.php");
          }else{
            $_SESSION["error"] = "Logo Update  Fail";
            header("location:overall.php");
          }
    }

    /* Change password */
    if(isset($_POST["ChangePassword"])){
        $name = $_POST["name"];
        $current_pass = htmlspecialchars($_POST["current_pass"]);
        $current_pass = pwd_has($current_pass);
        $new_pass = htmlspecialchars($_POST["new_pass"]);
        $new_pass = pwd_has($new_pass);
        $sql = "SELECT * FROM account WHERE  name='$name' AND password='$current_pass'";
        $result = mysqli_query($database_connection, $sql);
        if(mysqli_num_rows($result) > 0){
           $sql = "UPDATE account SET password='$new_pass' WHERE  name='$name' AND password='$current_pass'";
           $result = mysqli_query($database_connection, $sql);
           if($result){
            $_SESSION["success"] = " Password Change Success";
            header("location:change_password.php");
          }
        }else{ 
          
            $_SESSION["error"] = "Wrong Password";
            header("location:change_password.php");
        }
    }

    /* change-style-logo */
    if(isset($_POST["change-style-logo"])){
       $style = $_POST["logo-style"];
       $sql = "UPDATE logo_style SET style='$style' ";
       $result = mysqli_query($database_connection, $sql);
       if($result){
        $_SESSION["success"] = " Logo Style Change Success";
        header("location:overall.php");
       }else{
        $_SESSION["error"] = " Logo Style Change Fail";
        header("location:overall.php");
       }
    }


    /* Home Page */
    if(isset($_POST["home_page"])){
       $title = htmlspecialchars($_POST["title"]);
       $title_size = htmlspecialchars($_POST["title_size"]);
       $title_color = htmlspecialchars($_POST["title_color"]);
       $bg_color = htmlspecialchars($_POST["bg_color"]);
       $text = htmlspecialchars($_POST["text"]);
       $text_size = htmlspecialchars($_POST["text_size"]);
       $text_color = htmlspecialchars($_POST["text_color"]);
       $text_bg_color = htmlspecialchars($_POST["text_bg_color"]);
       $button_text = htmlspecialchars($_POST["button_text"]);
       $button_link = htmlspecialchars($_POST["button_link"]);
       $button_color = htmlspecialchars($_POST["button_color"]);
       $button_bg_color = htmlspecialchars($_POST["button_bg_color"]);
       $display = htmlspecialchars($_POST["display"]);
       $opacity = htmlspecialchars($_POST["opacity"]);
       $width = htmlspecialchars($_POST["width"]);
       $text_align = htmlspecialchars($_POST["text_align"]);

       $sql = "UPDATE home_page SET title='$title',title_size='$title_size',title_color='$title_color',bg_color='$bg_color',text='$text',text_size='$text_size',text_color='$text_color',text_bg_color='$text_bg_color',button_text='$button_text',button_link='$button_link',button_color='$button_color',button_bg_color='$button_bg_color',status='$display',opacity='$opacity',width='$width',text_align='$text_align' ";

        $result = mysqli_query($database_connection,$sql);

        if($result){
            $_SESSION["success"] = " Home Page Update Success";
            header("location:home.php");
           }else{
            $_SESSION["error"] = "  Home Page Update Fail";
            header("location:home.php");
           }

    }
?>