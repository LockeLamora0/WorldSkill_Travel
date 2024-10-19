
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || reservation</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
<?php
include 'connexionBDD.php';
$id = $_GET['id']; 

$lesLigne = $conn->query("SELECT logement.urlPhotoPrincipal,logement.urlPhotoSecondaire, logement.typeLogement,logement.nbchambre,voyage.Nom, voyage.Description, voyage.Pays, voyage.prix FROM `voyage` INNER JOIN logement ON voyage.idVoyage = logement.idLogement WHERE voyage.idVoyage =$id");

foreach($lesLigne as $uneLigne){

    echo "<br>";
    echo "<img src=".$uneLigne['urlPhotoPrincipal'].">";
    echo "<img src=".$uneLigne['urlPhotoSecondaire'].">";
    
    echo "type de logement : ".$uneLigne['typeLogement']. " || Nom du voyage : ".$uneLigne['Nom']. " - ".$uneLigne['Pays'];
    echo "<br>";
    echo "Nombre de couchages disponnible : " .$uneLigne['nbchambre'];
    echo "<br>";
    echo "<br>";
    echo $uneLigne['Description'];
    echo "<br>";
    echo $uneLigne['prix']."/nuit";
    echo "<br>";
    echo "<form action='../vue/formulaire_Reservation.html'>";
    echo "<button type='submit' class='bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full '>Réserver</button>";
    echo '</form>';
 }

?>

</body>
</html>