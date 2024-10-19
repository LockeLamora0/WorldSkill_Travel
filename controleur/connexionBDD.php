<?php
$srv = "localhost";
$user = "root";
$pass = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=worldskill', $user, $pass);
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
}

