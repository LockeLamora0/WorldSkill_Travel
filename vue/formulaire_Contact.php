<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Contact</title>
    <link href="../src/output.css" rel="stylesheet">

</head>
<body>
    <?php include('menu.html') ?>

    <h2 class="text-green-600 text-center">Réservation</h2>
    <form action="../controleur/mailenvoi.php" method="post">
        <input type="text" name="nom" placeholder="nom" class="border-solid border-2 border-green-600 rounded-lg text-center  w-2/5">
        <input type="text" name="prenom" placeholder="prenom" class="border-solid border-2 border-green-600 rounded-lg text-center w-2/5 ">
        <br>
        <input type="text" name="mail" placeholder="mail" class="border-solid border-2 border-green-600 rounded-lg text-center  w-1/6" >
        <br>
        <textarea id="story" name="story" class="border-solid border-2 border-green-600 rounded-lg text-center w-1/2 h-42"></textarea>
        <br>
        <button type="submit" class="bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full ">envoyer</button>
    </form>
</body>
</html>