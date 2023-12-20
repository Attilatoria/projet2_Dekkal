<link rel="stylesheet" href="../css/info.css">

<?php
require_once "../controllers/infoPerso.php";

$infos = new info();

// Appeler la méthode pour afficher les informations de l'utilisateur connecté
$userData = $infos->getInfoUser();
echo '<br/><br/>';
echo '<a href="../pages/VetementFemme.php">Retour</a>';
echo '<br/><br/>';

if (!empty($userData)) {
    echo '<table class="tableInfo">';
    foreach ($userData as $key => $value) {
        echo '<tr>';
        echo '<td>Email</td>';
        echo '<td>'. $value['email'];
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Username</td>';
        echo '<td>'. $value['username'];
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Password</td>';
        echo '<td>'. $value['pwd'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<br/><br/>';
    echo '<Button>Supprimer</Button>';
} else {
    echo 'Aucune information utilisateur trouvée.';
}
?>
