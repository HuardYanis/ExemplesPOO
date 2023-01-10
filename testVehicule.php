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
$train->Demarre();
echo "</br>";
$train->Stop();
echo "</br>";
echo "<hr>";

$voiture->Type();
echo "</br>";
$voiture->Klaxon();
echo "</br>";
$voiture->Demarre();
echo "</br>";
$voiture->Stop();
echo "</br>";
echo "<hr>";

$camion->Type();
echo "</br>";
$camion->Klaxon();
echo "</br>";
$camion->Demarre();
echo "</br>";
$camion->Stop();
echo "</br>";
echo "<hr>";

$dirigeable->Type();
echo "</br>";
$dirigeable->Klaxon();
echo "</br>";
$dirigeable->Demarre();
echo "</br>";
$dirigeable->Stop();
echo "</br>";
echo "<hr>";

$avion->Type();
echo "</br>";
$avion->Klaxon();
echo "</br>";
$avion->Demarre();
echo "</br>";
$avion->Stop();
echo "</br>";
echo "<hr>";

$voilier->Type();
echo "</br>";
$voilier->Klaxon();
echo "</br>";
$voilier->Demarre();
echo "</br>";
$voilier->Stop();
echo "</br>";
echo "<hr>";

$paquebot->Type();
echo "</br>";
$paquebot->Klaxon();
echo "</br>";
$paquebot->Demarre();
echo "</br>";
$paquebot->Stop();
echo "</br>";
echo "<hr>";








?>