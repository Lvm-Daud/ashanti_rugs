<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<?php require 'partials/header.view.php';?>


  
  <div class="container" style="padding:150px 0px;">
    
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p align="center" class="lead">
        Your order has been successfully placed.
        </p>
        <p align="center">
        Thankyou for shopping with us.
        </p>
      </div>
    </div>
    
  </div>
  


    <?php require 'partials/footer.view.php';?>