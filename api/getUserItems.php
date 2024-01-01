<?php
require_once "../includes/ConnectDb.php";
require_once "base_cart.php";


$cartItem = new CartItem();
die($cartItem->getUserItemCount($_GET['user_id']));