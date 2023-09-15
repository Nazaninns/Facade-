<?php

use Classes\RestaurantFacade;

include_once "vendor/autoload.php";



$order = [
    'Jooje',
    'Gheyme'
];

$restaurant = new RestaurantFacade($order);
$foods=$restaurant->finalizeOrder();
echo "<pre>";
print_r($foods);
echo "<pre>";
echo $restaurant->getReceipt().'<br>';