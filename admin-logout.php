<?php
    session_start();

    if(isset($_SESSION['isLoginad'])){
        unset($_SESSION['isLoginad']);
        header("location:admin-login.php");
    }
?>