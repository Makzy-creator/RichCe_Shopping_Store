<?php
$host = "Localhost";
$username = "root";
$password = "";
$dbname = "richce_cart_system";

$con = mysqli_connect($host,$username,$password,$dbname);

if (!$con) {
    echo "connection failed";
}
?>