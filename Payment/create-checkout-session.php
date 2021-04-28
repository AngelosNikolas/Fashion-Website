<?php
session_start();

$price = 0.00;

if (isset($_SESSION['cost'])){
    $price = $_SESSION['cost'] + 10;
    $price = sprintf("%.2f", $price);
    $price = str_replace(".", "", $price);
}
require_once('stripe-php-master/init.php');
\Stripe\Stripe::setApiKey('sk_test_51ISiahGDrYd4wBrLIrG1tNLkPnTgcMcheUJBvskUo0Ehsrd4DmMxAzxmedzOfGKJvUtTApOLRTMuzOOoxzEiTIbL00aAvmG1Dw');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'gbp',
      'unit_amount' => $price,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost/Fashion/Front-end/',
  'cancel_url' => 'http://localhost/Fashion/Front-end/checkout.php',
]);

echo json_encode(['id' => $checkout_session->id]);