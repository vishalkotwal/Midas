

<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel = 'stylesheet' type = 'text/css' href="style.css">
</head>
<body>
    <form action = 'check.php' method = 'post'>
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?> 
            <p class ='error'><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?> 
            <input type = 'text' name= 'user' placeholder="Select unique one please" value="<?php echo $_GET['uname'];?>"></br>
        <?php }else{ ?>
            <input type = 'text' name= 'user' placeholder="Select unique one please"></br>
        <?php }?>
        <label>Email</label>
        <?php if (isset($_GET['email'])) { ?> 
            <input type = 'email' name= 'email' placeholder="Email" value="<?php echo $_GET['email'];?>"></br>
        <?php }else{ ?>
            <input type = 'email' name= 'email' placeholder="Email"></br>
        <?php }?>

        <label>Password</label>
        <input type = 'password' name ='password' placeholder="Password"></br>

        
        <label>Re enter password</label>
        <input type = 'password' name= 're_password' placeholder="Confirm Password"></br>
        
        </br>
        <button type="submit">Sign up</button>
            <a href = 'form.php' class="ca" style="font-size:14px;display:contents;text-decoration:none;color:#444;float:left;text-decoration:underline;">Already have an account?</a>
    </form>
</body>

</html>