<?php 
include '../models/CRUD.php';

class Login extends Crud
{
    public function loginUser()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['pwd'];

            try {
                $user = $this->getByUsername($username, $password);

                if ($user !== false) {
                    session_start();
                    $_SESSION['userId'] = $user['id'];

                    // Vérifier le rôle de l'utilisateur
                    if ($user['role_id'] == 1) {
                        // Rediriger vers la page AddProducts.php
                        header("Location: ../pages/AddProducts.php");
                        exit();
                    } else {
                        // Rediriger vers une autre page si nécessaire
                        header("Location: ../pages/VetementFemme.php");
                        exit();
                    }
                } else {
                    echo 'console.error("Nom d\'utilisateur ou mot de passe incorrect")';
                }
            } catch (PDOException $e) {
                echo 'console.error("PDOException: ' . $e->getMessage() . '")';
            }
        }
    }
}
?>
