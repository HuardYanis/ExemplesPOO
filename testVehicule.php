<?php

require_once 'Vehicule.php';
require_once "Train.php";
require_once "Voiture.php";
require_once "Camion.php";
require_once "Dirigeable.php";
require_once "Avion.php";
require_once "Voilier.php";
require_once "Paquebot.php";

$train = new Train("Train");
$voiture = new Voiture("Voiture");
$camion = new Camion("Camion");

$dirigeable = new Dirigeable("Dirigeable");
$avion = new Avion("Avion");

$voilier = new Voilier("Voilier");
$paquebot = new Paquebot("Paquebot");



$train->Type();
echo "</br>";
$train->Klaxon();
echo "</br>";

$voiture->Type();
echo "</br>";
$voiture->Klaxon();
echo "</br>";

$camion->Type();
echo "</br>";
$camion->Klaxon();
echo "</br>";

$dirigeable->Type();
echo "</br>";
$dirigeable->Klaxon();
echo "</br>";

$avion->Type();
echo "</br>";
$avion->Klaxon();
echo "</br>";

$voilier->Type();
echo "</br>";
$voilier->Klaxon();
echo "</br>";

$paquebot->Type();
echo "</br>";
$paquebot->Klaxon();
echo "</br>";








?>