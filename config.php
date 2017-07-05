<?php
    require_once('stripe-php/init.php');

    $stripe = array(
            "secret_key"      => "sk_live_",
            "publishable_key" => "pk_live_"
    );

    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

    
