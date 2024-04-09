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
    <title>clients</title>
</head>
<body>
    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Email</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM user";
            $result=$mysqli->query($sql);

             while($row=$result->fetch_assoc()){
                echo "<tr>
                <td>$row[id]</td>
                <td>$row[FirstName]</td>
                <td>$row[LastName]</td>
                <td>$row[phone]</td>
                <td>$row[adress]</td>
                <td>$row[email]</td>
                <td><a href='./edit_client.php?id=$row[id]'><button class='signup-button'>Edit</button></a></td>
                <td><a href='./delete_client.php?id=$row[id]'><button class='signup-button'>Delete</button></a></td>
            </tr> ";
            }
            ?>
        </tbody>
    </table>
</body>
</html>