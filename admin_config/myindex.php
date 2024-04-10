<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require "../db/db-config.php";
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
    <link href="..\style.css" rel="stylesheet"/>
</head>
<body style="background-color:#FFDFAF" >
    <div id="dashboard-content" style="display:flex">
        <?php if(isset($_SESSION["admin_id"])): ?>
            <div class="sidebar">
            <h1 style="color:#15062b; text-align:start ">Admin: <br/><?= $admin["name"] ?></h1>
            <ul style="flex-direction: column">
                <li ><button class="dashboard-button" href="#" onclick="loadContent('clients.php')">Clients</button></li>
                <li ><button class="dashboard-button" href="#" onclick="loadContent('products.php')">Products</button></li>
                <li ><button class="dashboard-button" href="#" onclick="loadContent('records.php')">Records</button></li>
            </ul>
        </div>
            <div style="width:75vw; height:100vh; overflow: scroll" id="content">
              <h1 style="color:black">Welcome Back Admin ! <br/> </h1>
            </div>
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