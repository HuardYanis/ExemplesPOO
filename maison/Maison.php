<?php
require_once "Sdb.php";
require_once "Cuisine.php";
require_once "Chambre.php";

class Maison {
    private $cuisine;
    private $sdb;
    private $chambre = array();


    public function __construct($cuisine, $sdb) {
        $this->cuisine = $cuisine;
        $this->sdb = $sdb;
    }

    public function addChambre($ch) {
    $this->chambre[] = $ch;

    }



}




?>