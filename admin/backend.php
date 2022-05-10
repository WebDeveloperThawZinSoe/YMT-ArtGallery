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
?>