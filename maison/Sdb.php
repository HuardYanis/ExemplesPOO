<?php
    require_once "Piece.php";

    class Sdb extends Piece {
        private $arrive_eau;

        public function setEau($nb) {
            $this->arrive_eau = $nb;
            
        }
    }




?>