<?php
include 'connexionBDD.php';


$stmt2 = $conn->prepare("INSERT INTO `voyage`(`Nom`, `Pays`, `Description`, `prix`,`urlPreview`) VALUES (:nomDestination, :pays, :description, :prix, :urlPreview)");
$stmt = $conn->prepare("INSERT INTO `logement`( `typeLogement`, `nbchambre`, `urlPhotoPrincipal`, `urlPhotoSecondaire`) VALUES (:typeLogement, :nbchambre, :urlPhotoPrincipal, :urlPhotoSecondaire)");
$stmt->bindParam(':typeLogement', $typeLogement);
$stmt->bindParam(':nbchambre', $nbChambre);
$stmt->bindParam(':urlPhotoPrincipal', $url1);
$stmt->bindParam(':urlPhotoSecondaire', $url2);
$stmt2->bindParam(':nomDestination',$nomDestination);
$stmt2->bindParam(':pays',$Pays);
$stmt2->bindParam(':description',$description);
$stmt2->bindParam(':prix',$prix);
$stmt2->bindParam(':urlPreview',$url3);


$typeLogement = $_POST['type'];
$nbChambre = $_POST['nb_personne'];
$url1 = $_POST['url1'];
$url2 = $_POST['url2'];
$url3 = $_POST['url3'];
$nomDestination = $_POST['nomDestination'];
$Pays = $_POST['lepays'];
$prix = $_POST['prix'];
$description = ['Desc'];

$stmt->execute();
$stmt2->execute();
header("Location:../index");
?>