<?php


if (isset($_POST['email'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    if (empty($email)){
        header("Location: index.php?error=User Name is required");
        exit();

    }else if (empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();

    }else{
        echo "valid input";
    }

}else {
    header("Location: aa.php");
    exit();
}