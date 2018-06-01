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
              <td><?= $obj->product_code; ?></td>
              <td><?= $obj->product_name; ?></td>
              <td>
                <?= $quantity; ?>
                &nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id=<?= $product_id; ?>">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id=<?= $product_id; ?>">-</a>
              </td>
              <td><?= $cost; ?></td>
            </tr>
            <?php 
                  } } }
            ?>
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
  

    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p></p>';

          if(isset($_SESSION['cart'])) {

            
            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price_xs FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price_xs * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">Checkout</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>



    <?php require 'partials/footer.view.php';?>