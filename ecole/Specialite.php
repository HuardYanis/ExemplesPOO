<?php

    Class Specialite {

        private $code;
        private $libelle;


        public function __construct( $code, $libelle ) {
            $this->code = $code;
            $this->libelle = $libelle;
        }
        public function afficheCesSpecialite() {   

            return $this->code." ".$this->libelle;

        }







    }


?>