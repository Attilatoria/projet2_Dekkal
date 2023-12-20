<?php
class produits extends Crud
{
    public function newProduct()
    {
        if (isset($_POST['submit'])) {
            // Récupérer les valeurs du formulaire
            $imageName = $_FILES['image'];
            $description = $_POST['desc'];
            $productName = $_POST['name'];
            $quantity = $_POST['qty'];
            $price = $_POST['price'];


            // Préparer la requête SQL d'insertion
            $sqlreq = "INSERT INTO product (name, qtty, price, url_img, description) VALUES (:productName, :quantity, :price, :imageName, :description)";
            $sqlData = [
                'imageName' => $imageName,
                'description' => $description,
                'productName' => $productName,
                'quantity' => $quantity,
                'price' => $price
            ];
        }
    }
}
