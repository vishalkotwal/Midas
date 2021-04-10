<?php
session_start();
include 'connection.php';


if (isset($_POST['user']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        echo $data;
        return $data;
    }
    $uname = validate($_POST['user']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location: form.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: form.php?error=Password is required");
        exit();
    }else {
        $pass = md5($pass);
        $sql = "SELECT * FROM signin WHERE user = '$uname' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['user'] ===$uname && $row['password']==$pass){
                $_SESSION['user'] = $row['user'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: form.php?error=Password is required");
                exit();
            }
        }else {
            header("Location: form.php?error=Incorrect User Name or Password");
            exit();
        }
    }   
}else{
    header('Location: form.php');
    exit();
}


