<?php
    require_once "Specialite.php";
    require_once "Professeur.php";


    $sp1 = new Specialite("S01","java");
    $sp2 = new Specialite("S02","php");
    $sp3 = new Specialite("S03","python");
;


    $prof1 = new Professeur ("Huard","yanis","h.yanis@live.fr");
    $prof1->setSpecialite($sp1);
    $prof1->setSpecialite($sp2);
    $prof1->setSpecialite($sp3);


    $prof1->afficheProfesseur();




?>