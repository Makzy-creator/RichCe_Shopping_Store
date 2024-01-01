
<?php
interface ICartItem {
  function addToCart($userId,$productId,$quantity);
  function removeFromCart($cartItemId, $quantity, $productId);
  function getUserItemCount($userId);
}


class CartItem implements ICartItem {
  private $conn;
  function __construct() {
  $createDB = new ConnectDb();
  $this->conn = $createDB->getConnection();

}


function getUserItemCount($userId){
  $sql1 = "SELECT COUNT(quantity) AS SUM FROM cart WHERE user_id = :userId";

  $stmt = $this->conn->prepare($sql1);
  $stmt->execute([':userId' => $userId]);

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return json_encode([
    'success' => true,
    'msg' => "{$result[0]['SUM']}"
  ]);
}
    
    // function addToCart($userId,$productId,$quantity){

    //   // Check if the product is already in the user's cart
    //   $checkCartQuery = "SELECT * FROM cart WHERE user_id = :userId AND product_id = :productId";
    //   $checkCartStmt = $conn->prepare($checkCartQuery);
    //   $checkCartStmt->bindParam(':userId', $userId);
    //   $checkCartStmt->bindParam(':productId', $productId);
    //   $checkCartStmt->execute();

    //   if ($checkCartStmt->rowCount() > 0){
        
    //     //update item quantity if the product is already in the cart

    //     $updateCartQuery = "UPDATE cart SET quantity = quantity + :quantity WHERE user_id = :userId AND product_id = :productId";
    //     $updateCartStmt = $conn->prepare($updateCartQuery);
    //     $updateCartStmt->bindParam(':quantity', $quantity);
    //     $updateCartStmt->bindParam(':userId', $userId);
    //     $updateCartStmt->bindParam(':productId', $productId);
    //     $updateCartStmt->execute();

    //   } else{
       
    //   }
    // }


     //Add product to cart
     
      function addToCart($userId, $productId, $quantity)
      {
          $sql1 = "INSERT INTO cart (user_id, product_id, quantity) VALUES (:userId, :productId, :quantity)";

          $stmt = $this->conn->prepare($sql1);
          $stmt->execute([':userId' => $userId, ':productId' => $productId,  ':quantity' => $quantity]);
          $this->getUserItemCount($userId);
          return json_encode([
            'success' => true,
            'msg' => 'successfully inserted record'
          ]);
      }
     

    function removeFromCart($cartItemId, $quantity, $productId){
      // Remove the product from the user's cart
      // $removeFromCartQuery = "DELETE FROM cart WHERE id = :cartItemId AND user_id = :userId";
      // $removeFromCartStmt = $conn->prepare($removeFromCartQuery);
      // $removeFromCartStmt->bindParam(':cartItemId', $cartItemId);
      // $removeFromCartStmt->bindParam(':userId', $userId);
      // $removeFromCartStmt->execute();

      $sql1 = "DELETE FROM cart (cartItemId, product_id, quantity) VALUES (:cartItemId, :productId, :quantity)";

          $stmt = $this->conn->prepare($sql1);
          $stmt->execute([':cartItemId'=> $cartItemId, ':productId' => $productId,':quantity' => $quantity]);
          // $this->getUserItemCount($userId);
          return json_encode([
            'success' => true,
            'msg' => 'successfully inserted record'
          ]);
    }




  }