<?php
include_once '../models/CRUD.php';

class Produits extends Crud
{
    public function newProduct()
    {
        if (isset($_POST['submit'])) {
            // Récupérer les valeurs du formulaire
            $imageInfo = $_FILES['image'];
            $description = $_POST['desc'];
            $productName = $_POST['name'];
            $quantity = $_POST['qty'];
            $price = $_POST['price'];

            // Extraire le nom du fichier
            $imageName = $imageInfo['name'];

            // Préparer la requête SQL d'insertion
            $sqlreq = "INSERT INTO product (name, qtty, price, url_img, description) VALUES (:productName, :quantity, :price, :imageName, :description)";
            $sqlData = [
                'imageName' => $imageName,
                'description' => $description,
                'productName' => $productName,
                'quantity' => $quantity,
                'price' => $price
            ];

            $newProduct = new Crud();
            $new = $newProduct->add($sqlreq, $sqlData);

            if ($new) {
                echo 'alert("Ajouté avec succès");';
            } else {
                echo 'alert("Erreur lors de l\'ajout");';
            }
        }
    }
}
?>