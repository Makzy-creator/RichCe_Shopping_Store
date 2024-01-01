<?php
    $conn = new mysqli("localhost", "root", "", "richce_cart_system");
    if($conn->connect_error){
        die("connection Failed!".$conn->connect_error);
    }
?>