<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || AjoutVoyage</title>
    <link href="../src/output.css" rel="stylesheet">

</head>
<body>
    <?php include('menu.html') ?>
    
    <h2 class="text-green-600 text-center">ajout</h2>
    <div class="rounded-full shadow-xl h-auto w-auto">
        <div class="">
            <form action="../controleur/control_AjoutVoyage.php" method="post"  class="content-center	">
                <input type="text" name="type" placeholder="type de logement" class="border-solid border-2 border-green-600 rounded-lg text-center space-y-2 w-2/5" >
                <input type="number" name="nb_personne" placeholder="nombre de personne maximum" class="border-solid border-2 border-green-600 rounded-lg text-center space-y-2 w-2/5">
                <br>
                <input type="text" name="url1" placeholder="url de la photo principal" class="border-solid border-2 border-green-600 rounded-lg text-center resize-y ">
                <br>
                <input type="text" name="url2" placeholder="url de la deuxieme photo" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <input type="text" name="url3" placeholder="url de la photo qui va apparaitre en preview" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <br>
                <input type="text" name="lepays" placeholder="quelle est votre pay ?" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <input type="number" name="prix" placeholder="prix d'une nuit" class="border-solid border-2 border-green-600 rounded-lg text-center space-y-2 w-2/5">
                <input type="text" name="nomDestination" placeholder="le nom de votre ville" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <br>
                <textarea name="Desc"  class="border-solid border-2 border-green-600 rounded-lg text-center resize min-h-[100px]" placeholder="Noter une description de votre logement et des activité réalisable dans votre région." rows="4" cols="50"></textarea><br>
                <br>
                <button type="submit" class="bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full ">S'inscrire</button>
            </form>
        </div>
        
    </div>

</body>
</html>