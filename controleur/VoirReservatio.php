<?php
include 'connexionBDD.php';

$id=$_GET['id'];
$lesLigne = $conn->query("SELECT * FROM `client` INNER JOIN reservation ON client.id = reservation.idClient WHERE client.id=$id ");



    
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
        foreach($lesLigne as $uneLigne){

            echo "<p ><span class='font-bold'>nom du voyageur : </span>".$uneLigne["nomReservation"]."</p>";
            echo "<p ><span class='font-bold'>prenom du voyageur : </span>".$uneLigne["prenomReservation"]."</p>";
            echo "<p ><span class='font-bold'>address mail du voyageur : </span>".$uneLigne["mailReservation"]."</p>";
            echo "<p ><span class='font-bold'>téléphone du voyageur : </span>".$uneLigne["TéléphoneReservation"]."</p>";
            echo "<p ><span class='font-bold'>date du départ du voyageur : </span>".$uneLigne["date"]."</p>";
            echo "<p ><span class='font-bold'>heure du départ du voyageur : </span>".$uneLigne["heure"]."</p>";
            echo "<p ><span class='font-bold'>nombre de Personne : </span>".$uneLigne["nbVisiteur"]."</p>";
            echo "-------------------------------------------------------";
        }
    ?>
</body>
</html>