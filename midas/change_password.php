<!DOCTYPE html>
<html>
<head>
    <title>Forgot password</title>
    <link rel = 'stylesheet' type = 'text/css' href="style.css">
</head>
<body>
<form action = 'check_password.php' method = 'post'>
        <h2>Forgot Password</h2>
        <?php if (isset($_GET['error'])) { ?> 
            <p class ='error'><?php echo $_GET['error'];?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?> 
            <p class ='success'><?php echo $_GET['success'];?></p>
        <?php } ?>
        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?> 
            <input type = 'text' name= 'user' placeholder="Enter the existing username" value="<?php echo $_GET['uname'];?>"></br>
        <?php }else{ ?>
            <input type = 'text' name= 'user' placeholder="Enter the existing username"></br>
        <?php }?>

        <label>New Password</label>
        <input type = 'password' name ='password' placeholder="Password"></br>

        
        <label>Re-enter password</label>
        <input type = 'password' name= 're_password' placeholder="Confirm Password"></br>
        
        </br>
        <button type="submit">Change?</button>
    </form>
</body>

</html>