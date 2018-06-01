<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" media="screen" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>ASHANTI RUGS</title>
  </head>

  <body>

    <header>

      <div class="container" style="padding: 5px 0px;">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">



          <div class="logo-con">
            <img src="../img/logo.jpg" alt="">
          </div>
          <div class="usp-con">
            <div class="header-usp usp1">
              <div style="float: left; width: 100%;">Free</div>
              <div style="float: left; width: 100%;">UK delivery</div>
              <div class="vl"></div>
            </div>
            <div class="header-usp usp2">
              <div style="float: left; width: 100%;">Easy</div>
              <div style="float: left; width: 100%;">Returns</div>
              <div class="vl"></div>
            </div>
            <div class="header-usp usp3">
              <div style="float: left; width: 100%;">Lowest prices</div>
              <div style="float: left; width: 100%;">gauranteed</div>
              <div class="vl"></div>
            </div>
            <div class="header-usp usp4">
              <div style="float: left; width: 100%;">Any</div>
              <div style="float: left; width: 100%;">Sizes</div>
            </div>
          </div>
          <div class="top-search-con">
            <div style="float: left;">



              <form action="" method="POST" class="form-inline" role="form">

                <div class="form-group">
                  <label class="sr-only" for="">label</label>
                  <input type="text" class="form-control ar-search" id="" placeholder="Search">
                </div>



              </form>
            </div>
            <div style="float: left; margin-left:10px;">
              <div class="btn-group">
                <button type="button" class="btn btn-default ar-btn1">
                  <i class="fa fa-user"></i>
                </button>
                <button type="button" class="btn btn-default ar-btn1 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <?php
                  if(isset($_SESSION['username'])){
                    echo '<li><a href="account.php">My Account</a></li>';
                    echo '<li><a href="logout.php">Log Out</a></li>';
                  }
                  else{
                    echo '<li><a href="login.php">Log In</a></li>';
                    echo '<li><a href="register.php">Register</a></li>';
                  }
                ?>
                </ul>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default ar-btn1">
                  <i class="fa fa-shopping-cart"></i>
                </button>
                <button type="button" class="btn btn-default  ar-btn1 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a href="cart.php">Cart</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>

        </div>


        <div class="visible-xs col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <center>
                <img src="../img/logo.jpg" class="img-responsive" alt="">
              </center>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px;">


              <div class="form-group">
                <div class="icon-addon addon-lg">
                  <input type="text" placeholder="Search" class="form-control" id="email">
                  <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                </div>
              </div>



            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <center>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-default btn-sm">
                    <label for="" class="glyphicon glyphicon-user"></label>
                  </button>
                  <button type="button" class="btn  btn-sm btn-default">
                    <label for="" class="glyphicon glyphicon-shopping-cart"></label>
                  </button>
                </div>
              </center>


            </div>

          </div>


        </div>

      </div>

    </header>


    <div class="container-fluid bgcol1">
      <div class="row">
        <div class="container">
          <nav class="navbar navbar-default ar-navbar-main">
            <div class="">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ar-main-navbar-collapse" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="ar-main-navbar-collapse">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="products.php">New Arrivals</a>
                  </li>
                  <li>
                    <a href="products.php">Style</a>
                  </li>
                  <li>
                    <a href="products.php">Colour</a>
                  </li>
                  <li>
                    <a href="products.php">Brands</a>
                  </li>
                  <li>
                    <a href="products.php">Size/Shape</a>
                  </li>
                  <li>
                    <a href="products.php">Best Sellers</a>
                  </li>
                  <li>
                    <a href="products.php">Sale</a>
                  </li>
                  <li>
                    <a href="products.php">Buyers Guide</a>
                  </li>
                  <li>
                    <a href="products.php">Clearance</a>
                  </li>
                  <li>
                    <a href="products.php">Special Offer</a>
                  </li>
                  <li>
                    <a href="orders.php">My Orders</a>
                  </li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>