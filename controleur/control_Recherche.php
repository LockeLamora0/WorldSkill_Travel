
</html>
<?php
include 'connexionBDD.php';
$dest = $_GET["name"];
echo "debug : ".$dest;
include '../vue/menu.html';
$lesLigne = $conn->query("SELECT * FROM `voyage` WHERE Pays LIKE '%$dest%'");


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
    if(empty($lesLigne)){
        echo "aucun resultat";
    }else{
        foreach($lesLigne as $uneLigne){
            echo "<div class='p-20 bg-purple-100 w-full md:w-1/2 shadow-xl' >";
            $img = $uneLigne['urlPreview'];
            echo "<img src='$img' alt='Preview' width='200' height='300'>";
            echo "<div class='container'>";
            
            echo "<h4 class='text-green-600 font-bold'>".$uneLigne['Nom']."</h4>";
            echo "<p>".$uneLigne['Description']."</p>";
            echo "<p>".$uneLigne['prix']." €/nuit</p>";
            $id = $uneLigne['idVoyage'];
            $url="controleur/page_voyage.php?id=$id" ;
            echo '<form action='.$url.' method="POST">';
            echo "<button type='submit' class='bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full '>Réserver</button>";
            echo '</form>';
            echo "</div>";
            echo "</div>";
            echo "<br>";
        }
    }
        
    ?>
</body>