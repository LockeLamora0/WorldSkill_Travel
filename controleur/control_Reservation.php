<?php
include 'connexionBDD.php';


    $stmt = $conn->prepare("INSERT INTO `reservation`(`nomReservation`, `prenomReservation`, `mailReservation`, `TéléphoneReservation`, `date`, `heure`, `nbVisiteur`) VALUES (:Nom, :prenom, :mail, :telephone, :laDate, :heure, :nbVisiteur)");
    $stmt->bindParam(':Nom', $name);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':telephone', $Téléphone);
    $stmt->bindParam(':laDate', $date);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':nbVisiteur', $nbVisiteur);

    
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $Téléphone = $_POST['téléphone'];
    $date = $_POST['DateDépart'];
    $heure = $_POST['Heure'];
    $nbVisiteur = 3;
    echo "nom : " .$name." prenom : ". $prenom . " mail :  ". $mail." tel :  ". $Téléphone. " date :  ".$date."  heure : ". $heure." nb visteur : ". $nbVisiteur; 
    $stmt->execute();
    
    header("Location:../index");
    



?>