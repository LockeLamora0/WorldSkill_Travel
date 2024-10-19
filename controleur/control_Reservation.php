<?php
include 'connexionBDD.php';

    session_start();
    if(empty($_SESSION["idUser"])){
        echo "erreur veiller vous connecter";

    }else{
        $stmt = $conn->prepare("INSERT INTO `reservation`(`nomReservation`, `prenomReservation`, `mailReservation`, `TéléphoneReservation`, `date`, `heure`, `nbVisiteur`,`idClient`) VALUES (:Nom, :prenom, :mail, :telephone, :laDate, :heure, :nbVisiteur, :idClient)");
        $stmt->bindParam(':Nom', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':telephone', $Téléphone);
        $stmt->bindParam(':laDate', $date);
        $stmt->bindParam(':heure', $heure);
        $stmt->bindParam(':nbVisiteur', $nbVisiteur);
        $stmt->bindParam(':idClient', $idClient);
    
    
        
        $name = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $Téléphone = $_POST['téléphone'];
        $date = $_POST['DateDépart'];
        $heure = $_POST['Heure'];
        $nbVisiteur = 3;
        $idClient = $_SESSION["idUser"];
    
        echo "nom : " .$name." prenom : ". $prenom . " mail :  ". $mail." tel :  ". $Téléphone. " date :  ".$date."  heure : ". $heure." nb visteur : ". $nbVisiteur; 
        $stmt->execute();
        
        header("Location:../index");
    }
    
    



?>