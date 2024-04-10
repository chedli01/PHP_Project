<?php
session_start();
if(isset($_SESSION["admin_id"])){
    $mysqli=require "../db/db-config.php";
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

    <table>
        <thead>
            <tr>
                <th>orderId</th>
                <th>customerId</th>
                <th>orderDate</th>
                <th>totalAmount</th>
                <th>shippingAdress</th>
                

            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM orders";
            $result=$mysqli->query($sql);

             while($row=$result->fetch_assoc()){
                echo "<tr>
                <td>$row[orderId]</td>
                <td>$row[customerId]</td>
                <td>$row[orderDate]</td>
                <td>$row[totalAmount]</td>
                <td>$row[shippingAdress]</td>
                <td><a href='./edit_orders.php?id=$row[orderId]'><button class='signup-button'>Edit</button></a></td>
                <td><a href='./delete_orders.php?id=$row[orderId]'><button class='signup-button'>Delete</button></a></td>
                <td><a href='./order_details.php?id=$row[orderId]'><button class='signup-button'>View Details</button></a></td>
            </tr>";
            }
            ?>
            
            
            
            
           
        </tbody>
    </table>

<ul>
                <li><a href="#" onclick="loadContent('pending.php')">pending</a></li>
                <li><a href="#" onclick="loadContent('processing.php')">processing</a></li>
                <li><a href="#" onclick="loadContent('shipped.php')">shipped</a></li>
                <li><a href="#" onclick="loadContent('delivred.php')">delivred</a></li>
            </ul>

    

    
</body>
</html>
