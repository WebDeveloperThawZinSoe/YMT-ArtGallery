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
       if(mysqli_num_rows($result) > 0){
           $_SESSION["error"] = "User Already Exist";
           header("location:account.php");
       }else{ 
           $sql = "INSERT INTO account(name,password) VALUES ('$username','$password')";
           $result = mysqli_query($database_connection, $sql);
           if($result){
            $_SESSION["success"] = "Account Create  Success";
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
        $sql = "INSERT INTO artist(name,image,bio) VALUES ('$username','$unique_file_name','$bio')";
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
        $sql = "INSERT INTO posts(title,artist_id,image, description,price,status) VALUES ('$title','$artists','$unique_file_name','$description','$price','$status')";
        $result = mysqli_query($database_connection,$sql);
        if($result){
            $_SESSION["success"] = "Post Create  Success";
            header("location:posts.php");
        }else{
            $_SESSION["error"] = "Post Create  Fail";
            header("location:posts.php");
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
?>