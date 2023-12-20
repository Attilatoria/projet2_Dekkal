<?php
require_once "../models/CRUD.php";

class Login extends Crud
{
    public function loginUser()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            

            try {
                $user = $this->getByUsername($username, $password);

                if ($user != false) {

                    // Rediriger vers la page VetementFemme.php
                    header("Location: ../pages/VetementFemme.php");
                    
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
