<?php
require_once "../models/CRUD.php";
class register extends Crud
{
    // function genererToken()
    // {
    //     // Générer une chaîne binaire aléatoire
    //     $bytes = random_bytes(32);

    //     //hash token
    //     $token = hash('sha256', $bytes);

    //     return $token;
    // }


    public function newUser()
    {

        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $token = $this->genererToken();

            $strname = $_POST['strname'];
            $strnumber = $_POST['strnumber'];
            $city = $_POST['city'];
            $province = $_POST['state'];
            $zip = $_POST['zip'];
            $country = $_POST['country'];


            // $password = password_hash($password, PASSWORD_DEFAULT);




            $requete2 = "INSERT INTO address (street_name, street_nb, city, province, zipcode, country ) VALUES (:strname, :strnumber, :city, :province, :zip, :country)";
            $itemData2 = [
                'strname' => $strname,
                'strnumber' => $strnumber,
                'city' => $city,
                'province' => $province,
                'zip' => $zip,
                'country' => $country
            ];

            try {
                // Nouvelle instance de la classe CRUD pour l'adresse
                $crudAdresse = new Crud();
                $newUserAdresse = $crudAdresse->add($requete2, $itemData2);
                $billing_address_id = $newUserAdresse;
                //faire aussi pour shipping

                $shipping_address_id = $newUserAdresse;

                $requete = "INSERT INTO user (email, token, username, fname, lname, pwd, billing_address_id, shipping_address_id, role_id) VALUES (:email, :token, :username, :fname, :lname, :pwd, $billing_address_id, $shipping_address_id, 3)";
                $itemData = [
                    'email' => $email,
                    'token' => '',
                    'username' => $username,
                    'fname' => $fname,
                    'lname' => $lname,
                    'pwd' => $password,
                ];

                // Nouvelle instance de la classe CRUD pour l'utilisateur
                $crudUser = new Crud();
                $newUserInfo = $crudUser->add($requete, $itemData);

                if ($newUserInfo && $newUserAdresse) {
                    echo 'alert("Inscription réussie");';
                } else {
                    echo 'alert("Inscription echouee");';
                }
            } catch (PDOException $e) {
                echo 'console.error("PDOException: ' . $e->getMessage() . '")';
                echo 'alert("Erreur lors de l\'inscription1111");';
            }
        }
    }
}
