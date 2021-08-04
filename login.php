<?php
session_start(); 
include "db_conn.php";
if (isset($_POST['its']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $its = validate($_POST['its']);
    $pass = validate($_POST['password']);

    if (empty($its)) {
        header("Location:index.php?error=ITS ID is required");
        exit();
    }
    else if(empty($pass)){
        header("Location:index.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE its ='$its' AND password = '$pass'";

        $result = mysqli_query($conn ,$sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['its']=== $its && $row['password']=== $pass) {
                $_SESSION['its'] = $row['its'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location:home.php");
                exit();
            }else{
                header("Location:index.php?error=Incorrect ITS ID or Password");
                exit();
            }
        }else{
            header("Location:index.php?error=Incorrect ITS ID or Password");
            exit();
        }
    }
}else{
    header("Location:index.php");
    exit();
}
?>