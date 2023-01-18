<?php

abstract class Person {
    
 public $Nom;
 public $Prenom;
//  public static $compteur= 0 ;
 
   
}
 interface Gestion   {
    
     public function Ajouter($data);
     public function afficherData();
     
 
}
 class IGestion implements Gestion  {
    private  $listData = array();
     public function Ajouter($data)
    {
       $_data= implode(" ", $data);
        array_push($this->listData,$_data);
    }
    public function afficherData(){
        $data =  $this->listData;
        foreach($data as $value){
            echo $value .'<br>';
        }
    }


}
class Formateur extends Person {
   public function addItems($Nom ,$Prenom){
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    return [$Nom,$Prenom,"is a Formateur"];
    }  
    
}
class Stagiaire  extends Person {
    public function addItems($Nom, $Prenom ){
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        return [$Nom,$Prenom,"is a stagiaire"];    
    }  
}

$formateur = new Formateur;
$Stagiaire = new Stagiaire;
$Gestion = new IGestion;
$AddFormateur =  $formateur->addItems('hicham',"mliki");
$StagiaireAdd =  $Stagiaire->addItems('nada',"stitou");
$StagiaireAdd2 =  $Stagiaire->addItems('nadaz',"szztitou");
$Gestion->Ajouter($AddFormateur);
$Gestion->Ajouter($StagiaireAdd);
$Gestion->Ajouter($StagiaireAdd2);
$Gestion->afficherData();


?>