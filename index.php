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
        <?php include('./vue/menu.html') ?>

        <div id="search bar " class="flex flex-col justify-center items-center ">
            <form action="./controleur/control_Recherche.php" method="get" class="outline outline-black rounded-full shadow-xl bg-white">
                <input type="text" id="name" name="name" placeholder="votre prochaine destination" class="h32 text-center"   />
                <input type="image" id="search" src="./images/searchzoomminimono_105830.webp" width="20" height="20" class=" rounded-full  size-7 bg-green-600">
            </form>
        </div>
    </div>

    <div class="bg-white">
        <?php include ('./controleur/card_voyage.php')?>
    </div>
    
    <!-- ne pas oublier de remplacer la police par la roboto black -->
</body>
</html>