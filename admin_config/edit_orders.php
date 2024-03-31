<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
$id=$_GET['id'];
if($_SERVER["REQUEST_METHOD"]=="GET"){

$sql="SELECT * FROM orders WHERE orderId={$id} LIMIT 1";
$result=$mysqli->query($sql);
$order=$result->fetch_assoc();


}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $customerId=$_POST["customerId"];
    $orderDate=$_POST["orderDate"];
    $totalAmount=$_POST["totalAmount"];
    $shippingAdress=$_POST["shippingAdress"];
    

    $sqli="UPDATE orders SET customerId='$customerId',orderDate='$orderDate',totalAmount='$totalAmount',shippingAdress='$shippingAdress' WHERE orderId=$id ";
    $result=$mysqli->query($sqli);
    header("Location:myindex.php");
}
















?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT ORDERS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" novalidate>
        <div>
            <label for="customerId">customerId</label>
            <input type="text" id="customerId" name="customerId" value=<?= $order["customerId"]?>>
        </div>
        <div>
            <label for="orderDate">orderDate</label>
            <input type="text" id="orderDate" name="orderDate" value=<?= $order["orderDate"]?>>
        </div>
        <div>
            <label for="totalAmount">totalAmount-Number</label>
            <input type="text" id="totalAmount" name="totalAmount" value=<?= $order["totalAmount"]?>>
        </div>
        <div>
            <label for="shippingAdress">shippingAdress</label>
            <input type="text" id="shippingAdress" name="shippingAdress" value=<?= $order["shippingAdress"]?>>
        </div>
        
        <button>Update</button>



       


    </form>

</body>

</html>