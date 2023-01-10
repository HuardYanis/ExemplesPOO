<?php
    require_once "Piece.php";

    class Cuisine extends Piece {
        private $arrive_gaz;
        private $arrive_eau;

        

        public function setGaz_Eau($nbg,$nbe) {
            $this->arrive_gaz = $nbg;
            $this->arrive_eau = $nbe;

            
        }

    }




?>