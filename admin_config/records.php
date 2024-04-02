<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<body>
<ul>
                <li><a href="#" onclick="loadContent('pending.php')">pending</a></li>
                <li><a href="#" onclick="loadContent('processing.php')">processing</a></li>
                <li><a href="#" onclick="loadContent('shipped.php')">shipped</a></li>
                <li><a href="#" onclick="loadContent('delivred.php')">delivred</a></li>
            </ul>
    

    
</body>
</html>