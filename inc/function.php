<?php


/*
 * Fonction d'affichage des données 
 */

 function debug($value){

    echo "<pre>";
    print_r($value);
    echo "</pre>";
 }

 function dataEspace(){  foreach ($_POST as $key => $value) {
   $_POST[$key] = htmlspecialchars($value, ENT_QUOTES); // echappement des caractères
   $_POST[$key] = trim($value); // suppression des espaces avant et apres la chaine de caractère
}

 }

 // ########## FONCTIONS MEMBRES######

 function getMembreByPseudo($pseudo){

   global $bdd;

   $requete = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
   $requete->execute(['pseudo' => $pseudo]);
   $membre = $requete->fetch();


   return $membre;

        
}



?>