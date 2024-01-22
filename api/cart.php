<?php
  //if the user clicks on the add to cart button of a particular product, the form data of that product is checked in the database to see if it's available and if the quantity the user needs is available before it adds to cart
  if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['quantity'])) {
    //assign the post variables to new ones for easy identification also set the variables to integer
    $quantity = (int)$_POST['quantity'];
    $product_id = $_POST['product_id'];

    //prepare an sql statement for the computer to use and check/speak to know if that product the user clicked is available in the database
    $stmt = $pdo->prepare('SELECT * FROM product WHERE id = ?');
    $stmt->exec([$_POST['product_id']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC); //fetch the product from the database and return as an array

    //check if the product exits in the cart and it is an array
    if ($row && $quantity > 0) {
       //add the product to cart or update the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
          //check if array key exists in cart
          if (array_key_exists($product_id, $_SESSION['cart'])) {
              //update the quantity of the product whose array key exits in cart
              $_SESSION['cart'][$product_id] += $quantity;
          }else {
              //put the product in the cart
              $_SESSION['cart'][$product_id] = $quantity;
          }
        }else {
            //else if the cart session is not set ie, is empty and it is not an array, add the first product to cart:
            $_SESSION['cart'] = array($product_id=>$quantity);
        }  
    }
    //prevent from resubmission:
    header('location: ../api/cart.php');
    exit;
  }

  //Removing a product from cart: Once a user clicks the remove button for a product, the GET request is used to get the id of the product ie to be removed.
  //first i'll check if the remove button is set ie, has a value to be removed, next i'll check if that product_id in the remove button is numeric next i'll check if the cart contains that product to be removed, then i'll finalize that both the cart and the remove button has values in them.
  //finally, i'll unset the cart and get request by removing that particular product with a numeric id
  if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
      unset($_SESSION['cart'][$_GET['remove']]);
  }
?>


<?=header('Cart')?>

<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="imgs/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Remove</a>
                    </td>
                    <td class="price">&dollar;<?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">&dollar;<?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
        </div>
    </form>
</div>

<?=footer()?>


























// require_once "../includes/ConnectDb.php";
// require_once "base_cart.php";

// if(session_status() === PHP_SESSION_NONE){

//   session_start(); 
//  }


//  if(!isset($_SESSION['csrf'])) {
//   die(json_encode([
//     'success' => false,
//     'msg' => 'invalid request'
//   ]));
//  }

 
//  if(!isset($_POST['csrf'])) {
//   die(json_encode([
//     'success' => false,
//     'msg' => 'invalid request'
//   ]));
//  }


//  if($_POST['csrf'] !== $_SESSION['csrf']) {
//   die(json_encode([
//     'success' => false,
//     'msg' => 'invalid csrf'
//   ]));
//  }

// $cartItem = new CartItem();
// if(!isset($_POST['user_id'])){
//   $_POST['user_id'] = 1;
// }
// die($cartItem->addToCart($_POST['user_id'],$_POST['product_id'],$_POST['quantity']));