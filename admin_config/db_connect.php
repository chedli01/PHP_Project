<?php
$host="localhost";
$user="root";
$password="";
$database="login_db";
$mysqli=new mysqli(hostname:$host,username:$user,password:$password,database:$database);

if($mysqli->connect_errno){
    die("Connection error :" . $mysqli->connect_error);
}

return $mysqli;
