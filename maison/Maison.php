<?php
require_once "Sdb.php";
require_once "Cuisine.php";
require_once "Chambre.php";

class Maison {
    private $cuisine;
    private $sdb;
    private $chambre = array();
    public $longueur;
    public $largeur;


    public function __construct($cuisine, $sdb) {
        $this->cuisine = $cuisine;
        $this->sdb = $sdb;
    }

    public function addChambre($ch) {
    $this->chambre[] = $ch;

    }

    public function graph() { 

        $sup_chambre = $this->chambre;
        $sup_cuisine = $this->cuisine;
        $sup_sdb = $this->sdb;

        $long_chambre = array();
        $larg_chambre = array();




        

        $long_cuisine =$sup_cuisine->getLongueur();
        $larg_cuisine = $sup_cuisine->getLargeur();

        foreach($sup_chambre as $chambre) {
            $long_chambre[] += $chambre->getLongueur();
            $larg_chambre[] += $chambre->getLargeur();

        }

        $long_sdb = $sup_sdb->getLongueur();
        $larg_sdb = $sup_sdb->getLargeur();





        ?>
        
        <svg width="1000" height="1000">
            <rect x="50" y="20" width="<?= $long_cuisine?>" height="<?= $larg_cuisine?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
            <rect x="<?php echo $long_cuisine + 50; ?>" y="20" width="<?= $long_sdb?>" height="<?= $larg_sdb?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
            <?php
            $posx = 50;
            $compteur = 0;
            $posy = $larg_cuisine + 20;
            $tab = array();
            
            for($i=0; $i < count($long_chambre); $i++) { 
                $compteur += 1;
                
                ?>

                <rect x="<?php echo $posx; $posx += $long_chambre[$i]; ?>" y="<?php echo $posy ?>" width="<?= $long_chambre[$i]?>" height="<?= $larg_chambre[$i]?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1"/>
            <?php
                
                if($compteur == 2) {
                    $compteur = 0 ;
                    $posx=50;
                    $tab = [$larg_chambre[$i], $larg_chambre[$i-1]];
                    $posy += max($tab);
                }
                    
                }
                
            
             
            ?>
         </svg>
        
        <?php
        
        


     
 }







}




?>