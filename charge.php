<?php
require_once 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51J57LyCpymdwJn9A5rnWfCfblbxSCtDkQglxWJi6PN4mg69iBQGfHq3gc4X6katxsyvkYZJvxj52VKg4szirxJ6Q00o7PpjUVY');

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

$charge = \Stripe\Charge::create(array(
  'amount' => 5000,
  'currency' => 'usd',
  'description' => "Intro to react course",
  'customer' => $customer->id
));

header('Location:  success.php?tid='.$charge->id.'&product='.$charge->description);

 ?>
