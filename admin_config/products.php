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
    <title>Products</title>
</head>
<body>
    <a href="./add_product.php"><button class='signup-button'>Add Product</button></a>
    <br/>
    <br/>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>productCategory</th>
                <th>productName</th>
                <th>productPrice</th>
                <th>productDescription</th>
                <th>QuantityInStock</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM products";
            $result=$mysqli->query($sql);

             while($row=$result->fetch_assoc()){
                echo "<tr>
                <td>$row[productId]</td>
                <td>$row[productCategory]</td>
                <td>$row[productName]</td>
                <td>$row[productPrice]</td>
                <td>$row[productDescription]</td>
                <td>$row[quantityInStock]</td>
                <td><a href='./edit_product.php?id=$row[productId]'><button class='signup-button'>Edit</button></a></td>
                <td><a href='./delete_product.php?id=$row[productId]'><button class='signup-button'>Delete</button></a></td>

            </tr>
                ";
            }
            ?>
        </tbody>
    </table>

    
</body>
</html>