<?php

abstract class Person {
    
 public $Nom;
 public $Prenom;

   
}
 interface Gestion   {
    
     public function Ajouter($data);
     public function Supprimer($data);
     public function afficherData();

}
 class IGestion implements Gestion  {
    private  $listData = array();
     public function Ajouter($data)
    {
       $_data= implode(" ", $data);
        array_push($this->listData,$_data);
    }

     public function Supprimer($data){
         $_data= implode(" ", $data);
       $arraySearch= array_search($_data,$this->listData);
       \array_splice($this->listData,$arraySearch,1);
     }
    public function afficherData(){
        $data =  $this->listData;
        foreach($data as $value){
            echo $value .'<br>';
        }
        echo "total Person : ". count($data);
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
$Gestion->Supprimer($StagiaireAdd2);
$Gestion->afficherData();


?>