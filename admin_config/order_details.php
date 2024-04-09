<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require __DIR__ . "/db_connect.php";
    }
    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_Details</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>orderDetailId</th>
                <th>orderId</th>
                <th>productId</th>              
                <th>quantity</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM orderdetails where orderId={$id}";
            $result=$mysqli->query($sql);

             while($row=$result->fetch_assoc()){
                echo "<tr>
                <td>$row[orderDetailId]</td>
                <td>$row[orderId]</td>
                <td>$row[productId]</td>      
                <td>$row[quantity]</td>
                <td>$row[price]</td>
            </tr>
                ";
            }
            ?>
            
            
            
            
           
        </tbody>
    </table>
    

    
</body>
</html>