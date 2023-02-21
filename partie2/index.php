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
    // include("Camion.class.php"); 



    // Créer un véhicule noir de 1500 kg
    $vehicule = new Vehicule("noir", 1500);
    // Faire rouler le véhicule
    $vehicule->rouler();
    // Ajouter une personne de 70 kg
    $vehicule->ajouter_personne(70);
        echo "Le nouveau poids du véhicule est de " . $vehicule->getPoids() . " kg.";

    $quatre_roues = new Quatre_roues("rouge", 3000, 4);
    $quatre_roues->repeindre("bleu");


    $deux_roues = new Deux_roues("noir", 120, 80);
    $deux_roues->mettre_essence(20);
    $deux_roues->ajouter_personne(80);

    echo $deux_roues->getCouleur();
    echo $deux_roues->getPoids();


    // Créer un véhicule noir de 1400 kg
   // $voiture = new Voiture("verte", 1400, 5, 0);

    // Ajouter une personne de 65 kg
    //$voiture->ajouter_personne(65);
    //$voiture->ajouter_personne(65);


/*
    $camion = new Camion("bleu", 10000, 2, 10);
    $camion->ajouter_remorque(5);

*/


    // Afficher le nouveau poids du véhicule



  
    // var_dump($vehicule); 
  ?>











</body>
</html>