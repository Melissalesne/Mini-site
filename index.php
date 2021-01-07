<?php

// bob: 12 (123456), Francis: 53 (AZER), Bruce: 80 (azert), Clarck: 28 (12HGFD)

// -> liste des personnage en PHP 
//-> Créer le Hash du mot de passe
//-> Classe les personnages en ordre décroissant de l'age 

  // Tableau multidimensionnel 

  $str_origin = 123456;
  $str_origin = "AZER";
  $str_origin = "azert";
  $str_origin = "12HGFD";

  $personnages = array(
    "Personnage 1" => array(
      "nom" => "Bob",
      "age" => 12,
      "mot de passe" => 123456,
      "mot de passe hashé" => $str_origin =  $str_encoded = password_hash( $str_origin, PASSWORD_BCRYPT )
     
      
    ),

    "Personnage 2" => array(
      "nom" => "Francis",
      "age" => 53,
      "mot de passe" => "AZER",
      "mot de passe hashé" => $str_origin =  $str_encoded = password_hash( $str_origin, PASSWORD_BCRYPT )
      
      
    ),
    "Personnage 3" => array(
      "nom" => "Bruce",
      "age" => 80,
      "mot de passe" => "azert",
      "mot de passe hashé" => $str_origin =  $str_encoded = password_hash( $str_origin, PASSWORD_BCRYPT )
     
      
    ),
    "Personnage 4" => array(
      "nom" => "Clarck",
      "age" => 28,
      "mot de passe" => "12HGFD",
      "mot de passe hashé" => $str_origin =  $str_encoded = password_hash( $str_origin, PASSWORD_BCRYPT )
     
      
     
    )
  );


  foreach($personnages as $key => $value){
    echo $key. "<br>";
    if(is_array($value)){
        foreach($value as $key => $value){
             echo $key." : ".$value."<br>";
        }
    }
    echo "<br>";
  }


  echo "<br />";
  
$personnages = [12, 53, 80, 28];
rsort($personnages);
foreach ($personnages as $val){
    echo "$val<br/>";
} 
?>