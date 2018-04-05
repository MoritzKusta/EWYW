<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h1>Welcome</h1>
</div>
<div class="content">

    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Hello <?php echo $_SESSION['username']; ?></p>
        <p> <a href="index.php?logout='1'">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>