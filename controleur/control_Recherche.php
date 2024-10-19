<?php
include 'connexionBDD.php';
$dest = $_GET["name"];
echo "debug : ".$dest;

$lesLigne = $conn->query("SELECT * FROM `voyage` WHERE Pays LIKE '%$dest%'");

foreach($lesLigne as $uneLigne){
    echo "<br>";
    print $uneLigne['Pays'];
    echo "<br>";
}

?>