<?php require 'partials/header.view.php';?>
<div class="col-md-12  col-sm-12  col-xs-8 " style="background:#fff; padding:30px;">


    <?php if(1==2){?>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <h3 class="text-center">Billing Address</h3>

        <hr>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" >
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" >
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="Email id">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required name="last_name" id="last_name" class="form-control input-sm" placeholder="Mobile no">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <textarea class="form-control">
                </textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="country">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required name="first_name" id="first_name" class="form-control input-sm" placeholder="city">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required required name="last_name" id="last_name" class="form-control input-sm" placeholder="pincode">
            </div>
        </div>
        
    </div>

    <?php }?>


    <div class="col-md-offset-2 col-md-8 col-sm-12 col-sm-offset-0">
        
        
        
        <h3>Delivery Address</h3>
        <p>Please Provide your address.</p>
        <div class="alert alert-info">
            For now we support only cash on delivery(COD) system. No need to provide any payment information. (Only for UK).
        </div>
        <hr>

        
        <!-- <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Same as billing address
                </label>
            </div>
        </div> -->

        <form action="orders-update.php" name="deladdr" id="deladdr">

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required name="firstname" id="first_name" class="form-control input-sm" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required  name="lastname" id="last_name" class="form-control input-sm" placeholder="Last Name">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required  name="email" id="email" class="form-control input-sm" placeholder="Email id">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" required  name="mob" id="mob" class="form-control input-sm" placeholder="Mobile no">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <textarea required class="form-control" name="addr" placeholder="UK Address"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required readonly  name="cont" id="cont" class="form-control input-sm" placeholder="country" value="UK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required  name="city" id="city" class="form-control input-sm" placeholder="city">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <input type="text" required  name="pin" id="pin" class="form-control input-sm" placeholder="pincode">
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-info" style="float:right;" type="submit">
                Place Order
    </button>
        </div>
        </form>
    </div>

    
    
    
    
</div>