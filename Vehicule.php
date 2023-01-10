<?php

    Class Vehicule {

        private string $vehicule ;
        private bool $go ;

        public function __construct($vehicule) {

            $this->vehicule =$vehicule ;
            $this->go = false ;
        }


        public function Demarre() {
            if(!$this->go) {
                $this->go = true;
                echo "vroum";
            }else{
                echo "deja demarré";
            }
        }

        public function Stop() {
            if($this->go) {
                $this->go = false;
                echo "a l'arret";
            }else{
                echo "deja a l'arret";
            }
        }

        public function Klaxon() {

            return "pouet pouet";

        }






    }








?>