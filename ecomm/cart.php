<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

  <?php require 'partials/header.view.php';?>


  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3>Your Shopping Cart</h3>
      </div>
    </div>

    <?php if(isset($_SESSION['cart'])) {
      $total = 0;  
    ?>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Cost</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach($_SESSION['cart'] as $product_id => $quantity) {

                $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price_xs FROM products WHERE id = ".$product_id);
    
    
                if($result){
    
                  while($obj = $result->fetch_object()) {
                    $cost = $obj->price_xs * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
            ?>
            <tr>
              <td>
                <?= $obj->product_code; ?>
              </td>
              <td>
                <?= $obj->product_name; ?>
              </td>
              <td>
                <?= $quantity; ?>
                  &nbsp;
                  <div class="btn-group" role="group" aria-label="...">
                    <a class="btn btn-default btn-xs" href="update-cart.php?action=add&id=<?= $product_id; ?>">+</a>
                    <a class="btn btn-default btn-xs" href="update-cart.php?action=remove&id=<?= $product_id; ?>">-</a>
                  </div>


              </td>
              <td>
                <?= $cost; ?>
              </td>
            </tr>
            <?php 
                  } } }
            ?>
            <tr>
              <td colspan="3" align="right">Total</td>
              <td>
                <?= $total; ?>
              </td>
            </tr>
            <tr>
              <td colspan="4">
                <a href="update-cart.php?action=empty" class="btn btn-danger">Empty Cart</a>&nbsp;
                <a href="products.php" class="btn btn-default">Continue Shopping</a>'
                <?php if(isset($_SESSION['username'])) {?>
                <!-- <a class="btn btn-info" style="float:right;" href="orders-update.php"> -->
                <a class="btn btn-info" style="float:right;" href="checkout.php">
                  Checkout
                </a>
                <?php } else {?>

                <a href="login.php">
                  <button class="btn btn-info" style="float:right;">Login</button>
                </a>
                <?php }?>


              </td>
            </tr>
        </tbody>
      </table>
    </div>

    <?php } else {?>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="lead" style="text-align:center;">
          You have no items in your shopping cart.
        </p>
      </div>
    </div>

    <?php } ?>

  </div>



  <?php require 'partials/footer.view.php';?>