<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
  <?php
    // Chargement des classes
    include("Vehicule.class.php"); 
    include("Quatre_roues.class.php"); 
    include("Deux_roues.class.php");
    include("Voiture.class.php"); 
    include("Camion.class.php"); 


    echo "<h1>Quatre_roues</h1>";

    $quatre_roues = new Quatre_roues("rouge", 3000, 4);
    $quatre_roues->repeindre("bleu");

    var_dump($quatre_roues);



    echo "<h1>Deux_roues</h1>";

    $deux_roues = new Deux_roues("noir", 120, 80);
    $deux_roues->mettre_essence(20);
    $deux_roues->ajouter_personne(80);

    echo $deux_roues->getCouleur()."<br>";
    echo $deux_roues->getPoids()."<br>";

    $deux_rouesRouge = new Deux_roues("rouge", 150, 200);
    $deux_rouesRouge->ajouter_personne(70);
    echo $deux_rouesRouge->getPoids()."<br>";
    $deux_rouesRouge->setCouleur("vert")."<br>";
    


    echo "<h1>Voiture</h1>";

    // Créer un véhicule verte de 1400 kg
    $voiture = new Voiture("verte", 1400, 5, 0);

    // Ajouter une personne de 65 kg
    $voiture->ajouter_personne(65);
    $voiture->ajouter_personne(65);    
   
    echo $voiture->getCouleur()."<br>";
    echo $voiture->getPoids()."<br>"; 

    var_dump($voiture)."<br>"; 

    $voiture->repeindre("rouge");
    $voiture->ajouter_pneu_neige(2);

    echo $voiture->getCouleur()."<br>";
    echo $voiture->getPoids()."<br>";



    echo "<h1>Camion</h1>";

    $camion = new Camion("bleu", 10000, 2, 10);

    $camion->ajouter_remorque(5);
    $camion->ajouter_personne(80);

    echo $camion->getCouleur()."<br>";
    echo $camion->getPoids()."<br>";
    echo $camion->getLongueur()."<br>";
    echo $camion->getNombre_porte()."<br>";

    var_dump($camion)."<br>";
    echo "<h1>fonction statique</h1>";

  //ClassName::staticMethod(); Afficher toutes les valeurs des attributs du camion à l’aide la méthode afficher_attribut()
    Vehicule::afficher_attribut($camion);

    $camionBlanc = new Camion("blanc", 6000, 2, 5);

    $camionBlanc->ajouter_personne(84);
    $camionBlanc->repeindre("bleu")."<br>";
  
    //ClassName::staticMethod(); Afficher toutes les valeurs des attributs du camion à l’aide la méthode afficher_attribut()
    Vehicule::afficher_attribut($camionBlanc);



   


  ?>










</body>
</html>