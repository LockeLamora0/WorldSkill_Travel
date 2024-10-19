<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Espace client</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    

</body>
</html>
<?php
session_start();
//demarage d'un session pour récuperer l'id de l'utilisateur et l'utiliser dans le formulaire de reservation

include 'connexionBDD.php';
include '../vue/menu.html';
echo "<h1 class='text-2xl'>Votre Espace</h1>";
$mdp = $conn->prepare("SELECT * FROM `client` INNER JOIN reservation ON client.id = reservation.idClient WHERE client.id= :id");
$mdp->execute(array('id' => $_GET['id']));
$resultat = $mdp->fetch();
$img = $resultat["urlPhotoProfils"];
// information sur l'identité du compte
echo "<img src=".$img." class='rounded-full object-cover h-[41] w-[46]'>";
echo "<br>";
echo "<p1 class='text-green'>vos information</h1>";
echo "<br>";
echo "nom : ".$resultat["Nom"]. "<br>";
echo "prenom : ".$resultat["prenom"]. "<br>";
echo "Address Mail : ".$resultat["mail"]. "<br>";
echo "Modifier votre mot de passe : ";
$var1 = $resultat['id'];
$_SESSION["idUser"]=$var1;
//echo $_SESSION["idUser"];
echo "<form action='../controleur/control_ModificationMdp.php?id=$var1' method='post'>";
echo "<input type='text' name='Mdp' placeholder='nouveaux mot de passe'  class='border-solid border-2 border-green-600 rounded-lg text-center'>";
echo "<br>";
echo "<button type='submit' class='bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full'>modifier</button>";
echo "</form>";
// section lié au reservation de l'utilisateur 
echo "<br>";
echo "<h2>Mettre à disposition un logement : </h2>";
echo "<form action='../vue/formulaire_AjoutVoyage.php' method='post'>";
echo "<button type='submit' class='bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full'>Acceder</button>";
echo "<br>";
echo "</form>";
echo "<br>";

echo "<h1 class='text-green'>Vos Réservation</h1>";
include ('VoirReservatio.php')



?>