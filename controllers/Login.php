<?php
require_once "../models/CRUD.php";
class login extends Crud
{
    public function LoginUser()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['pwd'];

            try {
                $conn = $this->getByUsername($username, $password);
                if ($conn) {
                    header("Location: ../pages/VetementFemme.php");
                }
            } catch (PDOException $e) {
                echo 'console.error("PDOException: ' . $e->getMessage() . '")';
            }
        }
    }
}