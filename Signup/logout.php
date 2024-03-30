<?php 
session_start();
session_destroy();
header("Location:myindex.php");
exit;
