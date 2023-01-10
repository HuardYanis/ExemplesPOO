<?php
    Class Professeur {

        private $nom;
        private $prenom;
        private $email;
        private $specialites = array();


        public function __construct($nom, $prenom, $email) {

            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
        }

        public function setSpecialite($specialites) {

            $this->specialites[] = $specialites;
        }




        public function afficheProfesseur(){
            echo "<p>". $this->nom." ".$this->prenom."</p>";
            echo "<p><a href=mailto:".$this->email.">".$this->email."</a></p>";
            $this->afficheSpecialite();
        }

        public function afficheSpecialite(){

            echo "<ul>";
            foreach($this->specialites as $specialite){
                echo "<li>".$specialite->afficheCesSpecialite()."</li>";
            }

            echo "</ul>";
            

        }

    
    
    
    
    
    }





    



?>