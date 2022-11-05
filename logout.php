<?php
    session_start();

    if(isset($_SESSION['isLoginok'])){
        unset($_SESSION['isLoginok']);
        header("location:giaodien.php");
    }
?>