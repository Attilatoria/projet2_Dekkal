<?php 
include '../models/CRUD.php';

class info extends Crud
{
    public function getInfoUser()
    {
        // Démarrer la session
        session_start();

        // Vérifier si $userId est défini dans la session
        if (isset($_SESSION['userId'])) {
            // Récupérer l'ID de l'utilisateur depuis la session
            $userId = $_SESSION['userId'];

            // Utiliser la méthode getById pour obtenir les informations de l'utilisateur
            $info = $this->getById('user', $userId);

            return $info;
        } else {
            echo 'console.error("Identifiant d\'utilisateur non défini dans la session")';
        }
    }
}
?>
