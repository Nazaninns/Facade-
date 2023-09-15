<?php

use Classes\FacadeSubsystem\Chef;

include_once "vendor/autoload.php";


$receipt = new \Classes\FacadeSubsystem\Receipt(time());
$receipt->addItem('Jooje');
$receipt->addItem('Gheyme');
$chef = new Chef($receipt);
$foods = $chef->cook();


echo "<pre>";
print_r($foods);
echo "<pre>";
echo $receipt.'<br>';