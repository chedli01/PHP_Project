<?php


session_start();
if(isset($_SESSION["user_id"])){
    $mysqli=require __DIR__ . "/database.php";
    $sql="SELECT * FROM user WHERE id={$_SESSION["user_id"]} ";
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php if(isset($_SESSION["user_id"])): ?>
        <h3>you logged in <?= $user["FirstName"] ?></h3>
        <h4>You can <a href="logout.php">logout</a></h4>
    <?php else: ?>
        <h3>try to <a href="login.php">login</a></h3>
    <?php endif; ?>
</body>
</html>