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
    <div id="dashboard-content">
        <?php if(isset($_SESSION["admin_id"])): ?>
            <h1>Welcome Admin <?= $admin["name"] ?></h1>
            <ul>
                <li><a href="#" onclick="loadContent('clients.php')">Clients</a></li>
                <li><a href="#" onclick="loadContent('products.php')">Products</a></li>
                <li><a href="#" onclick="loadContent('records.php')">Records</a></li>
            </ul>
            <div id="content"></div>
        <?php else: ?>
            <h3>Admin not found</h3>
        <?php endif; ?>
    </div>

    <script>
        function loadContent(page) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", page, true);
            xhttp.send();
        }
    </script>
</body>
</html>