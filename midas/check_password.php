<?php
session_start();
include 'connection.php';


if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['re_password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['user']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);

    $data = 'uname='. $uname;
    
    

    if(empty($uname)){
        header("Location: change_password.php?error=User Name is required&$data");
        exit();
    }else if(empty($pass)){
        header("Location: change_password.php?error=Password is required&$data");
        exit();
    }
    else if(empty($re_pass)){
        header("Location: change_password.php?error=Please confirm ur Password&$data");
        exit();
    }
    else if($pass!=$re_pass){
        header("Location: change_password.php?error=Confirm the password correctly&$data");
        exit();
    }else {
        $re_pass = md5($re_pass);
        $sql = "SELECT * FROM signin WHERE user = '$uname' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===0){
            header("Location: change_password.php?error=Username doesn't exists&$data");
            exit();
        }
        else{
            $sql2 = "UPDATE signin SET password = '$re_pass' WHERE user = '$uname'" ;
            $result2 = mysqli_query($conn,$sql2);
            if($result2){
                header("Location: form.php?success=Your password is updated");
                exit();
            }else{
                header("Location: change_password.php?error=Please try again&$data");
                exit();
            }
        }
    }   
}else{
    header('Location: change_password.php');
    exit();
}
