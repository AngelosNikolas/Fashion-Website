<?php session_start();

$cost = 0;

$shipping_cost = 10;

$final_cost = 0;

$counted_items = null;

if(isset($_SESSION['items'])){
    $items = $_SESSION['items'];
    //print_r($items);
    //$counted_items = array_count_values($_SESSION['items']);
}

if(isset($_SESSION['cost'])){
    $cost = $_SESSION['cost'];

    $final_cost = $cost + $shipping_cost;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Commercial</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/<checkout>.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: #e5c6db;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="color: rgb(232,127,201);background: #e5c6db;">
        <div class="container"><a class="navbar-brand" href="index.php" style="background: url(&quot;assets/img/logoFinal.png&quot;) center / contain no-repeat;height: 53px;width: 120.8281px;"></a></div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <?php

                if(!isset($items) || empty($items)){
                    echo "<div class='card shadow mb-3'>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col'>
                                <p class='mt-2'><strong>Basket is empty!</strong></p>
                                <div class='row''>
                                    <div class='col-12 col-sm-6'><button id='home-button' class='btn btn-outline-dark btn-block' type='submit'>Start shopping</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                }else{
                    foreach ($items as $item=>$quantity){
                        $fields = explode("-", $item);
                        echo "<div class='card shadow mb-3'>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-4 text-center'><img class='img-fluid border rounded shadow' src='$fields[2]'></div>
                            <div class='col'>
                                <p class='mt-2'><strong>$fields[0]</strong></p>
                                <p class='mt-2'><strong>&pound;&nbsp;$fields[1]</strong></p>
                                <p class='mt-2'><strong>Quantity</strong></p>
                                <div class='row''>
                                    <div class='col'>
                                        <form>
                                            <div class='form-group'><input class='form-control' type='number' placeholder='Qty.' value='$quantity' name='qty' disabled></div>
                                        </form>
                                    </div>
                                    <div class='item col-12 col-sm-6'><button  data-src=\"$item\" id='remove-item' class='btn btn-outline-danger btn-block'>Remove</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                    }
                }

                ?>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Product Cost</p>
                            </div>
                            <div class="col">
                                <p class="text-right"><br><strong>£</strong>&nbsp; <?php echo $cost; ?></p>
                            </div>
                        </div>
                        <hr style="background: #323232;">
                        <div class="row">
                            <div class="col">
                                <p>Shipping Cost</p>
                            </div>
                            <div class="col">
                                <p class="text-right"><br><strong>£</strong>10.00</p>
                            </div>
                        </div>
                        <hr style="background: #323232;">
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 18px;"><strong>Total</strong></p>
                            </div>
                            <div class="col">
                                <p class="text-right" style="font-size: 18px;"><br><strong>£&nbsp; <?php echo $final_cost; ?></strong></p>
                            </div>
                        </div>
                        <hr style="background: #323232;">
                        <div class="row">
                            <!--<div class="col-12 col-sm-6"><button class="btn btn-outline-dark btn-block" type="submit">Cash On Delivery</button></div> -->
                            <?php
                                if ($cost == 0){
                                    echo "<div class=\"col\"><button disabled class=\"btn btn-primary btn-block\" type=\"submit\">Pay Now</button></div>";
                                }
                                else {
                                    echo "<div id='checkout-button' class=\"col\"><button class=\"btn btn-primary btn-block\"  type=\"submit\">Pay Now</button></div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card shadow">

                </div>
            </div>
        </div>
    </div>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="../payment/stripe.js" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/checkout.js" type="text/javascript"></script>
    <script src="assets/js/button.js" type="text/javascript"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>

</body>

</html>