<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    $sql="SELECT * FROM admin WHERE id={$_SESSION["admin_id"]}";
    $result=$mysqli->query($sql);
    $admin=$result->fetch_assoc();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-page</title>
</head>
<body>
    <div></div>
<?php if(isset($_SESSION["admin_id"])): ?>
        <h1>you logged in Admin <?=  $admin["name"] ?></h1>
        <h2><a href="./clients.php">Clients</a></h2>
        <h2><a href="./products.php">Products</a></h2>
        <h2><a href="./records.php">Records</a></h2>
    <?php else: ?>
        <h3>Admin not found</h3>
    <?php endif; ?>
    
</body>
</html>