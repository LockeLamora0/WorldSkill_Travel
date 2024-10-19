<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Accueil</title>
    <link href="./src/output.css" rel="stylesheet">
    
</head>
<body>

    <div id="en-tete">
    <div id="menu" >
        <nav>
            <ul class="sm:self-center text-x1">
                <li class="sm:inline-block space-x-10"><a href="#" class="p-3 hover:text-green-600"><img src="./images/Vintage_and_Retro_Holiday_Travel_Agent_Logo-removebg-preview.png" alt="logo" height="50px" width="50px"></a></li>
                <li class="sm:inline-block space-x-10"><a href="#" class="p-3 hover:text-green-600">idée voyage selon le métier</a></li>
                <li class="sm:inline-block space-x-10"><a href="./vue/formulaire_Contact.php" class="p-3 hover:text-green-600">Nous Contacter</a></li>
                <li class="sm:inline-block"><a href="#" class="p-3 hover:text-green-600">a propos</a></li>
            
                <li class="sm:inline-block"><a href="./vue/formulaire_inscription.php" class="p-3 hover:text-green-600">Inscription</a></li>
                <li class="sm:inline-block"><a href="./vue/formulaire_connexion.php" class="p-3 hover:text-green-600">connexion</a></li>
            </ul>
        </nav>
    </div>

        <div id="search bar " class="flex flex-col justify-center items-center ">
            <form action="./controleur/control_Recherche.php" method="get" class="outline outline-black rounded-full shadow-xl bg-white">
                <input type="text" id="name" name="name" placeholder="votre prochaine destination" class="h32 text-center"   />
                <input type="image" id="search" src="./images/searchzoomminimono_105830.webp" width="20" height="20" class=" rounded-full  size-7 bg-green-600">
            </form>
        </div>
    </div>

    <div class="bg-white">
        <?php 
        session_start();
        echo $_SESSION["idUser"];
        ?>
        <?php include ('./controleur/card_voyage.php')?>
    </div>
    
    <!-- ne pas oublier de remplacer la police par la roboto black -->
</body>
</html>