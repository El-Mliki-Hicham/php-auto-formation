<?php

class Calculatrice{
    private $a;
    private $b;
    private $operation;

    function __construct($a,$b,$operation) {
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
    }
 
    function calculer(){
        $solution = null;
        switch($this->operation){
            case "+" : $solution = $this->a + $this->b;
                break;
            case "-" : $solution = $this->a - $this->b;
                break;
        }
        
        return $solution;
    } 

}
   

    // Initialisation des variables
    $a = null;
    $b = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

    // Traitement

    // Récupération des variables de la page
    if(isset($_POST['x']))     $a = $_POST['x'];
    if(isset($_POST['y']))     $b = $_POST['y'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

    // Ajouter la valeur du nombre au X ou Y
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($a == null) $a = $nombre;
            else $a = floatval($a . $nombre);
        }else{
            if($b == null) $b = $nombre;
            else $b = floatval($b . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
        // Calcule
        $calculatrice = new Calculatrice($a,$b,$operation);
        $solution = $calculatrice->calculer($a,$b,$operation);
      
    }
    // Affichage 
    if($solution != null) $afficheur = $solution;
    else{
        if($a != null) $afficheur = $afficheur . "$a" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($b != null) $afficheur .= $b;
    }
     
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype calculatrice</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="x" value="<?php echo $a ?>">
    <input type="text" name="y" value="<?php echo $b ?>">
    <input type="text" name="operation" value="<?php echo $operation ?>">
    <input type="text" id="afficheur" name="afficheur" value="<?php echo $afficheur ?>" />
    <input type="submit" name="nombre" value="1"  ></input>
    <input type="submit" name="nombre" value="2"  ></input>
    <input type="submit" name="nombre" value="3"  ></input>
    <input type="submit" name="operation" value="+"  ></input>
    <input type="submit" name="operation" value="-"  ></input>
    <input type="submit" name="egale" value="="  ></input>
</form>
    
</body>
</html>