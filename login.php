<?php 
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
        echo 'Valid input';
    }
}else{
    header("Location:index.php");
    exit();
}
?>