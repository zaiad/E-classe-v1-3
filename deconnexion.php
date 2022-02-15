<?php
    session_start();
    session_unset();
    setcookie('email' , $_SESSION['email'] , time()-20 , "/");
    setcookie('password' , $_SESSION['password'] , time()-20 , "/");
    session_destroy();
    header("location:index.php");
?>