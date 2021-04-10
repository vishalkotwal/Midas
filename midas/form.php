

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel = 'stylesheet' type = 'text/css' href="style.css">
</head>
<body>
    <form action = 'login.php' method = 'post'>
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?> 
            <p class ='error'><?php echo $_GET['error'];?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?> 
            <p class ='success'><?php echo $_GET['success'];?></p>
        <?php } ?>

        <label>User Name</label>
        <input type = 'text' name= 'user' placeholder="User Name"></br>

        <label>Password</label>
        <input type = 'password' name ='password' placeholder="Password"></br>
        </br>
        <button type="submit">Login</button>
            <a href = 'signup.php' class="ca" style="font-size:14px;display:contents;text-decoration:none;color:#444;float:left;text-decoration:underline;"> hey new user click me</a></br>
            </br>
        </br>
            <a href = 'change_password.php' class="ca" ><button type="button">Forgot password?</button> </a>
    </form>
    <!-- <a href = 'change_password.php' ><button type="submit" class='li'>Change password?</button> </a> -->
</body>

</html>