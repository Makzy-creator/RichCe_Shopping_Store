
 <!-- ======= Products Section ======= -->
 <body>
      <section id="products" class="products">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Products</h2>
            <p>Check our Products</p>
          </div>
          <div
            class="row all-card d-flex align-items-stretch mt-md-0"
            data-aos="zoom-in"
            data-aos-delay="100"
            style="justify-content: center; align-items: center;"
          >
            <?php
              //to fetch the products from the database
                include 'config.php';
                //use sql query to select all the items from the product table
                $stmt = $conn->prepare("SELECT * FROM product WHERE id = ?");
                $stmt->execute();
                $result = $stmt->get_result();
                // $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- id,product_name,product_image,product_price,product_code -->
             <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card-1 text-center col-lg-3">
              <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                  <img src="<?= $row["product_image"] ?>" class="card-img-top" alt="">
                  <div class="card-body p-1">
                    <h5 class="card-title text-center mt-2 fw-bold"><?= $row['product_name'] ?></h5>
                    <p class="fw-bold">&#8358; <?= number_format($row ['product_price'],2) ?>
                    <?php if($row['rrp'] > 0): ?>
                    <span class="rrp">&#8358; <?=$row['rrp']?></span>
                    <?php endif; ?>
                  </p>
                  <form action="../api/cart.php" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$row['quantity'] ?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$row['id'] ?>">
                    <input type="submit" value="Add To Cart">
                  </form>
                  <div class="description">
                      <?=$row['desc'] ?>
                  </div>
                  </div>

                <!-- <div class="btn-card">
                  <form action="../api/cart.php" method="POST" class="addToCartForm">
                    <input type="hidden" name="product_id" value="<?= $row['id']?>"/>
                    <input type="hidden" name="product_price" value="<?= $row['product_price']?>"/>

                    <input type="hidden" name="product_code" value="<?= $row['product_code']?>"/>

                    <input type="hidden" name="product_image" value="<?= $row['product_image']?>"/>

                    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf']?>"/>
                    <button class="btn btn-block btn-cart text-center addToCartBtn" type="submit" 
                    ><i class="fas fa-cart-plus"></i>&nbsp; &nbsp; Add to Cart</button>
                  </form>
                </div> -->
              </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
</body>
</html>
      <!-- End Products Section -->