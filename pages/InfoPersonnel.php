<?php

require_once "../controllers/infoPerso.php";

$infos = new info();

// Appeler la méthode pour afficher les informations de l'utilisateur connecté
$userData = $infos->getInfoUser();


if ($userData) {
    // Afficher les informations de l'utilisateur
    echo 'Email: ' . $userData['email'] . '<br>';
    echo 'Token: ' . $userData['token'] . '<br>';
    echo 'Username: ' . $userData['username'] . '<br>';
    echo 'First Name: ' . $userData['fname'] . '<br>';
    echo 'Last Name: ' . $userData['lname'] . '<br>';
    echo 'Password: ' . $userData['pwd'] . '<br>';
} else {
    echo 'console.error("Utilisateur non connecté ou erreur lors de la récupération des données")';
}
?>

