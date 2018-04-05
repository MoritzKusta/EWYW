<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h1>Register</h1>
</div>

<form method="post" action="register.php">
    <div class="inputs">
        <label>Username</label>
        <input type="text" name="username" value="">
    </div>
    <div class="inputs">
        <label>Email</label>
        <input type="email" name="email" value="">
    </div>
    <div class="inputs">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="inputs">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="inputs">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <br>
        <a href="login.php">Sign in</a>

</form>
</body>
</html>