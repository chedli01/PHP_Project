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

    $orderStatus=$_POST["orderStatus"];
    

    $sqli="UPDATE orders SET customerId='$customerId',orderDate='$orderDate',totalAmount='$totalAmount',shippingAdress='$shippingAdress',orderStatus='$orderStatus' WHERE orderId=$id ";

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
    <link rel="stylesheet" href="..\style.css">
</head>

<body class="editing-body">
    <h1>Edit orders</h1>
    <form class="editing-form" method="post" novalidate>
        <div class="form-element">
            <label class="label" for="customerId">customerId</label>
            <input class="form-input" type="text" id="customerId" name="customerId" value="<?= $order["customerId"] ?>">
        </div>
        <div class="form-element">
            <label class="label" for="orderDate">orderDate</label>
            <input class="form-input" type="text" id="orderDate" name="orderDate" value="<?= $order["orderDate"] ?>">
        </div>
        <div class="form-element">
            <label class="label" for="totalAmount">totalAmount-Number</label>
            <input class="form-input" type="text" id="totalAmount" name="totalAmount" value="<?= $order["totalAmount"] ?>">
        </div>
        <div class="form-element">
            <label class="label" for="shippingAdress">shippingAdress</label>
            <input class="form-input" type="text" id="shippingAdress" name="shippingAdress" value="<?= $order["shippingAdress"] ?>">
        </div>
        <div>
            <label for="orderStatus">orderStatus</label>
            <input type="text" id="orderStatus" name="orderStatus" value=<?= $order["orderStatus"]?>>
        </div>
        
        <button class="signup-button">Update</button>

    </form>

</body>

</html>
