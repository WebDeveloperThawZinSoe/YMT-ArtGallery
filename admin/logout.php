<?php
    session_start();
    $_SESSION["user"] = null;
    $_SESSION["password"] = null;
    header("location:index.php");
?>