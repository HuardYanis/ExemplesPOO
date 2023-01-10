<?php

require_once "Sdb.php";
require_once "Cuisine.php";
require_once "Chambre.php";
require_once "Maison.php";



$cuisine = new Cuisine(15,2,2);
$cuisine->setGaz_Eau(1,2);


$sdb = new Sdb(10,1,1);
$sdb->setEau(1);

$chambre1 = new Chambre(12,1,1);
$chambre1->setLit(2);

$maison = new Maison($cuisine, $sdb);
$maison->addChambre($chambre1);



echo "<pre>";
print_r($cuisine);
print_r($sdb);
print_r($chambre1);
echo "</pre>";

echo "<pre>";
print_r($maison);
echo "</pre>";








?>