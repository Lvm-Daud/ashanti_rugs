<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

  <?php require 'partials/header.view.php';?>




  <div class="container">
    <div class="container" style="padding-top: 15px;">

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


          <center>
            <h1>
              <span class="label label-success">
                RUGS READY FOR SALE in UK
              </span>
            </h1>

            <p class="lead">FREE UK DELIVERY</p>
          </center>
          <hr class="small">

        </div>

      </div>

      <?php
      $i=0;
      $product_id = array();
      $product_quantity = array();

      $result = $mysqli->query('SELECT * FROM products');
      if($result === FALSE){
        die(mysql_error());
      }

      if($result){

        while($obj = $result->fetch_object()) {
      ?>

        <div class="row" style="margin-bottom:25px;">


          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

            <a href="#" class="thumbnail">
              <img style="max-height:300px;" src="images/products/<?= $obj->product_img_name; ?>" />
            </a>

          </div>
          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
            <h4>
              <?= $obj->product_name; ?>
                <small>
                  Available quantity:
                  <?= $obj->qty; ?> | Code:
                    <?= $obj->product_code; ?>
                </small>
            </h4>
            <p>
              <?= $obj->product_desc; ?>
            </p>


            <div class="row">

              <div class="col-lg-3">

                <h4>
                  <span class="label label-primary">
                    PRICE:
                    <?= $currency.' '.$obj->price_xs; ?>
                  </span>
                </h4>

              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php if($obj->qty > 0){?>
                  <a class="btn btn-info" href="update-cart.php?action=add&id=<?= $obj->id; ?>">
                    Add To Cart
                  </a>
                <?php } else {?>
                  Out Of Stock!
                  <?php } ?>
              </div>


            </div>

            

          </div>

        </div>

        <hr>

        <?php
        $i++; 
        }
      }
      $_SESSION['product_id'] = $product_id;
      ?>


    </div>

  </div>




        <?php require 'partials/footer.view.php';?>
