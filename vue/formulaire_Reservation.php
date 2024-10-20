<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldSkill Travel || Reservation</title>
    <link href="../src/output.css" rel="stylesheet">

</head>
<body>
    <?php include('menu.html') ?>

    <h2 class="text-green-600 text-center">Réservation</h2>
    <form action="../controleur/control_Reservation.php" method="post">
        <input type="text" name="nom" placeholder="nom" class="border-solid border-2 border-green-600 rounded-lg text-center  w-2/5">
        <input type="text" name="prenom" placeholder="prenom" class="border-solid border-2 border-green-600 rounded-lg text-center w-2/5 ">
        <br>
        <input type="text" name="mail" placeholder="mail" class="border-solid border-2 border-green-600 rounded-lg text-center  w-1/6" >
        <br>
        <input type="text" name="téléphone" placeholder="Téléphone" class="border-solid border-2 border-green-600 rounded-lg text-center w-4/5">
        <br>
        <input type="date" name="DateDépart" placeholder="Date Départ" class="border-solid border-2 border-green-600 rounded-lg text-center w-2/5">
        
        <input type="time" name="Heure" placeholder="Heure" class="border-solid border-2 border-green-600 rounded-lg text-center w-2/5">
        <br>
        <input type="number" name="nbVisiteur" placeholder="Nombre de visiteur" class="border-solid border-2 border-green-600 rounded-lg text-center">
        <br>
        <button type="submit" class="bg-transparent hover:bg-green-600 hover:text-white py-2 px-4 text-green-600 border-solid border-2 border-green-600 rounded-full ">Reservation</button>
    </form>
</body>
</html>