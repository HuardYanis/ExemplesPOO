<?php

    require_once "Mer.php";



    CLass Voilier extends Mer {

        private bool $start ;

            public function Klaxon() {
                echo "Hey ho du bateau (je suis un voilier) ";
            }

           
           
    
            public function __construct() {
    
                
                $this->start = false ;
            }
    
    
            public function Demarre() {
                if(!$this->start) {
                    $this->start = true;
                    echo "hissez les voiles";
                }else{
                    echo "voile deja hissé";
                }
            }
    
            public function Stop() {
                if($this->start) {
                    $this->start = false;
                    echo "baissez les voiles";
                }else{
                    echo "voiles deja baissé";
                }
            }




    }







?>