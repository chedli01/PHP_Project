<?php 

session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require "../db/db-config.php";
    }
$id=$_GET['id'];
$sql="DELETE FROM orders WHERE orderId={$id}";
$result=$mysqli->query($sql);
header("Location:myindex.php");
?>