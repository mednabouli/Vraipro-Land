<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $customer_details = array(
      'Customer Name' => $name,
	  'Customer Phone' => $phone
  );
  $address = array(
  	  'Billing Name' => $billing_name,
	  'Billing Address' => $billing_address,
	  'Billing Address 2' => $billing_address2
  );
  $customer = \Stripe\Customer::create(array(
      'email' => $email,
	  'metadata' => $customer_details + $address,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
	  "name" => "Basic Plan",
	  "id" => "basic-monthly",
	  "interval" => "month",
	  "interval_count" => "3",
      'amount'   => 11700,
      'currency' => 'cad'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>
