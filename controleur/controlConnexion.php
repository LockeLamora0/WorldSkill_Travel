<?php
include 'connexionBDD.php';


$auth = false;
$mdp = $conn->prepare("SELECT * FROM `client` where mail= :mail");
$mdp->execute(array('mail' => $_POST['mail']));
$resultat = $mdp->fetch();
$result = password_verify($_POST['Mdp'],$resultat['Mot_de_passe']);

if($result == true && $_POST['mail'] == $resultat['mail']){
    echo "mot de passe correct";
    header("Location:espaceClient.php?id=".$resultat['id']);
}else{
    echo "mot de passe incorrect";
    header("Location:../vue/formulaire_connexion.html");
}

?>