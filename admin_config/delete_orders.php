<?php 

session_start();
if(isset($_SESSION["user_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
$id=$_GET['id'];
$sql="DELETE FROM orders WHERE orderId={$id}";
$result=$mysqli->query($sql);
header("Location:myindex.php");
?>