<?php
include 'connexionBDD.php';



$stmt = $conn->prepare("INSERT INTO `client`(`Nom`, `addresse`, `mail`, `prenom`, `CP`, `Age`, `Mot_de_passe`,`urlPhotoProfils`) VALUES (:Nom, :addresse, :mail, :prenom, :CP, :Age, :Mot_de_passe, :photoProfil)");
$stmt->bindParam(':Nom', $name);
$stmt->bindParam(':addresse', $addresse);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':CP', $CP);
$stmt->bindParam(':Age', $Age);
$stmt->bindParam(':Mot_de_passe', $Mot_de_passe);
$stmt->bindParam(':photoProfil', $photoProfil);

$name = $_POST['nom'];
$addresse = $_POST['address'];
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$CP = $_POST['CP'];
$Age = 15;
$photoProfil = $_POST['img'];
$Mot_de_passe = password_hash($_POST['Mdp'], PASSWORD_ARGON2ID);

$stmt->execute();
header("Location:../index");
?>