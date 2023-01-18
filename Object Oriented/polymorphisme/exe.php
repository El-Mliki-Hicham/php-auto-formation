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
    // use Person;
    public  $listData = array();
     public function Ajouter($data)
    {
       $_data= implode(" ", $data);
    // $_data = (object)$data;
    //    var_dump($_data);
    //      die();
        array_push($this->listData,$_data);
    }
    public function afficherData(){
        $data =  $this->listData;
        foreach($data as $value){
            echo $value .'<br>';
        }
    //     var_dump($data);
        
    // // var_dump(implode(",", $data));
    // die();

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
$StagiaireAdde =  $Stagiaire->addItems('nadaz',"szztitou");
$Gestion->Ajouter($AddFormateur);
$Gestion->Ajouter($StagiaireAdd);
$Gestion->Ajouter($StagiaireAdde);
$Gestion->afficherData();


?>