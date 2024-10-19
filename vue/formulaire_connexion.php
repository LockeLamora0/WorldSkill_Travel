<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Connexion</title>
    <link href="../src/output.css" rel="stylesheet">

</head>
<body>
    <?php include('menu.html') ?>

    <h2>Connexion</h2>
    <form action="../controleur/controlConnexion.php" method="post">
        <input type="text" name="mail" placeholder="mail" class="border-solid border-2 border-green-600 rounded-lg text-center">
        <br>
        <input type="text" name="Mdp" placeholder="Mot de passe" class="border-solid border-2 border-green-600 rounded-lg text-center">
        <br>
        <button type="submit" class="bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full ">Connexion</button>
    </form>
    <?php echo "les utilisateur que l'on crée ne marche pas, pour acceder a l'espace client utiliser adminWeb2@gmail.com mdp: Admin";?>
</body>
</html>