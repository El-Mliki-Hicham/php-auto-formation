<?php

abstract class Person {
    
 public $Nom;
 public $Prenom;
//  public static $compteur= 0 ;
 
   
}
 interface Gestion   {
    
     public function Ajouter($data);
 
}
 class IGestion implements Gestion  {
    // use Person;
    // public  $listData = array();
     public function Ajouter($data)
    {
        $listData = []; 
        $listData +=$data ;
 
       return $listData ;       
    }

}
class Formateur extends Person {
   
   public function addItems($Nom ,$Prenom){
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    return [$Nom,$Prenom];
    
    
}  

}
class Stagiaire  extends Person {
    public function addItems($Nom, $Prenom ){
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        return [$Nom,$Prenom];
        
        
    }  
}

$formateur = new Formateur;
$Stagiaire = new Stagiaire;
$Gestion = new IGestion;
$AddFormateur =  $formateur->addItems('hicham',"mliki");
$StagiaireAdd =  $Stagiaire->addItems('nada',"stitou");
$AddToArray = $Gestion->Ajouter($AddFormateur);
$AddToArrayt = $Gestion->Ajouter($StagiaireAdd);
var_dump( $AddToArray ,$AddToArrayt);


?>