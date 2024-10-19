<?php
include 'connexionBDD.php';

echo $_GET['id'];
echo $_POST['Mdp'];
$stmt = $conn->prepare("UPDATE `client` Set `Mot_de_passe` = :mdp where id=:id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':mdp', $mdp);

$mdp = password_hash( $_POST['Mdp'], PASSWORD_ARGON2ID);
$id = $_GET['id'];


$stmt->execute();
header("Location:../vue/formulaire_connexion.html");
?>