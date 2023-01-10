<?php

require_once "Sdb.php";
require_once "Cuisine.php";
require_once "Chambre.php";
require_once "Maison.php";
require_once "piece.php";



$cuisine = new Cuisine(15,2,200,150);
$cuisine->setGaz_Eau(1,2);


$sdb = new Sdb(10,1,150,120);
$sdb->setEau(1);

$chambre1 = new Chambre(12,1,250,100);
$chambre1->setLit(2);

$chambre2 = new Chambre(12,1,250,100);
$chambre2->setLit(2);

$chambre3 = new Chambre(12,1,250,100);
$chambre3->setLit(2);

$chambre4 = new Chambre(12,1,250,100);
$chambre4->setLit(2);

$chambre5 = new Chambre(12,1,250,100);
$chambre5->setLit(2);

$chambre6 = new Chambre(12,1,190,70);
$chambre6->setLit(2);

$chambre7 = new Chambre(12,1,150,90);
$chambre7->setLit(2);

$chambre8 = new Chambre(12,1,250,190);
$chambre8->setLit(2);

$chambre9 = new Chambre(12,1,150,90);
$chambre9->setLit(2);


$maison = new Maison($cuisine, $sdb);
$maison->addChambre($chambre1);
$maison->addChambre($chambre2);
$maison->addChambre($chambre3);
$maison->addChambre($chambre4);
$maison->addChambre($chambre5);
$maison->addChambre($chambre6);
$maison->addChambre($chambre7);
$maison->addChambre($chambre8);
$maison->addChambre($chambre9);

$maison->graph();

?>
