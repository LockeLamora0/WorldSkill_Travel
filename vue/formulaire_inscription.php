<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Inscription</title>
    <link href="../src/output.css" rel="stylesheet">

</head>
<body>
    <?php include('menu.html') ?>

<!--     
    <div id="menu" >
        <nav>
            <ul class="sm:self-center text-x1">
                <li class="sm:inline-block space-x-10"><a href="../index.php" class="p-3 hover:text-green-600"><img src="../images/Vintage_and_Retro_Holiday_Travel_Agent_Logo-removebg-preview.png" alt="logo" height="50px" width="50px"></a></li>
                <li class="sm:inline-block space-x-10"><a href="#" class="p-3 hover:text-green-600">idée voyage selon le métier</a></li>
                <li class="sm:inline-block space-x-10"><a href="./vue/formulaire_Contact.php" class="p-3 hover:text-green-600">Nous Contacter</a></li>
                <li class="sm:inline-block"><a href="#" class="p-3 hover:text-green-600">a propos</a></li>
            
                <li class="sm:inline-block"><a href="./formulaire_inscription.php" class="p-3 hover:text-green-600">Inscription</a></li>
                <li class="sm:inline-block"><a href="./formulaire_connexion.php" class="p-3 hover:text-green-600">connexion</a></li>
            </ul>
        </nav>
    </div> -->

    <h2 class="text-green-600 text-center">Inscription</h2>
    <div class="rounded-full shadow-xl h-auto w-auto">
        <div class="">
            <form action="../controleur/control_Inscription.php" method="post"  class="content-center	">
                <input type="text" name="nom" placeholder="nom" class="border-solid border-2 border-green-600 rounded-lg text-center space-y-2 w-2/5" >
                <input type="text" name="prenom" placeholder="prenom" class="border-solid border-2 border-green-600 rounded-lg text-center space-y-2 w-2/5">
                <br>
                <input type="text" name="mail" placeholder="mail" class="border-solid border-2 border-green-600 rounded-lg text-center resize-y ">
                <br>
                <input type="text" name="address" placeholder="address" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <input type="text" name="CP" placeholder="Code Postal" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <br>
                <input type="text" name="Mdp" placeholder="Mot de passe" class="border-solid border-2 border-green-600 rounded-lg text-center">
                <br>
                <button type="submit" class="bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full ">S'inscrire</button>
            </form>
        </div>
        
    </div>

</body>
</html>