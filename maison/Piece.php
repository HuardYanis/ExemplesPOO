<?php
   

    class Piece{
       
        private $nbfenetre;
        private $nbporte;
        private $longueur;
        private $largeur;

        public function __construct( $nbfenetre, $nbporte,$longueur,$largeur){
            
            $this->nbfenetre = $nbfenetre;
            $this->nbporte = $nbporte;
            $this->longueur = $longueur;
            $this->largeur = $largeur;
        }
        public function setLongueur($longueur) {
            $this->longueur = $longueur;
        }
        public function setLargeur($largeur) {
            $this->largeur = $largeur;
        }
    
        public function getLongueur() {
            return $this->longueur;
        }
    
        public function getLargeur(){
            return $this->largeur;
    
        }
    
        



    }



?>